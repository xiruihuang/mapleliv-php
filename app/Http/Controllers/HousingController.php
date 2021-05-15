<?php

namespace App\Http\Controllers;

use App\AdBanner;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Housing;
use App\Type;
use App\HousingIMG;
use App\History;
use App\Favorite;
use DB;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Agent;
use Intervention\Image\ImageManagerStatic as Image;

class HousingController extends Controller
{
    public function addGenProperty(){
        if(Auth::check()){
            $userType  = Auth::user()->type;
            $user = Auth::user();
            return view('frontend/addGenProperty',compact('userType', 'user'));
        } else {
            Alert::warning('请先注册');
            return redirect('/register')->with('warning', '请先注册');
        }

    }

    public function createGenProperty(Request $request){
        if(Auth::check()){
            $house['userID'] = Auth::user()->id;
        } else {
            $house['userID'] = 0;
        }

        // dd($request);

        $house['uploadTypeID'] = 3;
        $house['refreshTime'] = 0;
        $house['title'] = $request->input('title');
        $house['contactPeople'] = $request->input('contactPeople');
        $house['phone'] = $request->input('phone');
        $house['wechat'] = $request->input('wechat');
        $house['address'] = $request->input('address');
        $house['city'] = $request->input('city');
        $house['publicPrice'] = $request->input('publicPrice');
        $house['description'] = $request->input('description');
        $house['status'] = 0;


        $a = $house['address'] . ',British Columbia, ' . $house['city'];
        //'9025 highland court,British Columbia, burnaby'
        $address = urlencode( $a );
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyDhYM_ZDZlyfZ8qNV6aCT55Fa_cG8brmE8";
        $resp    = json_decode( file_get_contents( $url ), true );


        // Latitude and Longitude (PHP 7 syntax)
        $lat    = $resp['results'][0]['geometry']['location']['lat'] ?? '';
        $long   = $resp['results'][0]['geometry']['location']['lng'] ?? '';


        $house['lat'] = $lat;
        $house['lng'] = $long;


        $newHouse = Housing::create($house);
        $id = $newHouse -> id;
        //store pictures
        if($request -> hasFile('file')){
            foreach($request->file as $file){
                /*
                $filename = $file->getClientOriginalName();
                $path = 'public/'.$id;
                Storage::makeDirectory($path);
                $file->resize(150,150);
                $file->storeAs($path,$filename);
                */
                $path = 'public/'.$id;
                Storage::makeDirectory($path);
                $filename = $id.'.'.$file->getClientOriginalName();
                $path1 = public_path('storeimg/'.$filename);
                $path2 = '../storeimg/'.$filename;
                Image::make($file->getRealPath())->resize(800,553)->save($path1);
                $image['housingID'] = $id;
                $image['fileName'] = $filename;
                $image['filePath'] = $path2;
                $image['status'] = 0;
                HousingIMG::create($image);
            }
        } else {
                $image['housingID'] = $id;
                $image['fileName'] = "default";
                $image['filePath'] = "../asset/img/default.png";
                $image['status'] = 0;
                HousingIMG::create($image);
        }

        Alert::success('发布成功');
        return redirect('/addGenProperty')->with('success', '发布成功');

    }

    public function rentkeyaProperty(){
        $housing = Housing::where([['uploadTypeID', '<', 3],['status','>', 0]])->orwhere([['isRentkeya', 1],['status','>', 0]])->orderBy('updated_at', 'desc')->paginate(8);
        $housing1 = Housing::where([['uploadTypeID', '<', 3],['status','>', 0]])->orderBy('updated_at', 'desc')->get();
        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = "";
        $filterResult['filterMinPrice'] = "";
        $filterResult['filterMaxPrice'] = "";
        $filterResult['filterBeds'] = "";
        $filterResult['title'] = "";
        $filterResult['city'] = "";

        $ads = AdBanner::where('route_url', '=', 'rentproperty')->get();

        /*return view('/frontend/rentkeyaProperty', compact('housing','houseIMGs','agent'));*/


        if($agent -> isDesktop()){
            return view('/frontend/rentkeyaProperty', compact('housing','houseIMGs','agent', 'filterResult', 'ads'));
        } else {
            return view('/mobile/rentkeyaHousing', compact('housing1','houseIMGs','agent','filterResult'));
        }


    }

    public function genProperty(){
        $housing = Housing::where('uploadTypeID', '>=', 3)->orderBy('updated_at', 'desc')->paginate(8);
        $housing1 = Housing::where(['uploadTypeID', '>=', 3])->orderBy('updated_at', 'desc')->get();
        $houseIMGs = HousingIMG::all();
        $agent = new Agent();
        /*return view('/frontend/generalProperty', compact('housing','houseIMGs','agent'));*/

         if($agent -> isDesktop()){
            return view('/frontend/generalProperty', compact('housing','houseIMGs','agent'));
        } else {
            return view('/mobile/genHousing', compact('housing1','houseIMGs','agent'));
        }
    }

//    public function addRentkeyaProperty(){
//        if(Auth::check()){
//            if(Auth::user()->type < 3){
//                $userType  = Auth::user()->type;
//                $user = Auth::user();
//                return view('/frontend/addRentkeyaProperty' ,compact('userType', 'user'));
//            } else {
//                Alert::error('Please Log in as Administrator!');
//                return redirect('/')->with('error', 'Please Log in as Administrator!');
//            }
//        } else {
//            Alert::warning('请先注册');
//            return redirect('/register')->with('warning', '请先注册');
//        }
//
//    }

    public function addRentkeyaProperty(){
        if(Auth::check()){
            $userType  = Auth::user()->type;
            $user = Auth::user();
            return view('frontend/addRentkeyaProperty',compact('userType', 'user'));
        } else {
            Alert::warning('请先注册');
            return redirect('/register')->with('warning', '请先注册');
        }

    }
    public function createRentkeyaProperty(Request $request){
        $house['userID'] = Auth::user()->id;
        $house['uploadTypeID'] = Auth::user()->type;
        $house['refreshTime'] = 0;
        $house['title'] = $request->input('title');
        $house['contactPeople'] = $request->input('contactPeople');
        $house['phone'] = $request->input('phone');
        $house['wechat'] = $request->input('wechat');
        $house['address'] = $request->input('address');
        $house['city'] = $request->input('city');
        $house['publicPrice'] = $request->input('publicPrice');
        $house['description'] = $request->input('description');
        $house['originPrice'] = $request->input('originPrice');
        $house['area'] = $request->input('area');
        $house['beds'] = $request->input('beds');
        $house['baths'] = $request->input('baths');
        $house['furnitures'] = $request->input('furnitures');
        $house['washingMachines'] = $request->input('washingMachines');
        $house['dishWasher'] = $request->input('dishWasher');
        $house['elevator'] = $request->input('elevator');
        $house['oven'] = $request->input('oven');
        $house['parking'] = $request->input('parking');
        $house['electricity'] = $request->input('electricity');
        $house['web'] = $request->input('web');
        $house['floor'] = $request->input('floor');
        $house['housingAges'] = $request->input('housingAges');
        $house['status'] = 0;
        $house['gas'] = $request->input('gas');
        $house['condition'] = $request->input('condition');
        $house['progress'] = $request -> input('progress');
        $house['websiteLink'] = $request -> input('websiteLink');
        $house['size'] = $request -> input('size');
        $house['enterTime'] = $request -> input('enterTime');
        $house['contactPhone'] = $request -> input('contactPhone');
        $house['landlore'] = $request -> input('landlore');
        $house['isRentkeya'] = 1;

        $a = $house['address'] . ',' . $house['city'];
        //'9025 highland court,British Columbia, burnaby'

        $address = urlencode( $a );
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyBwp8S3UV9qGcY73oOYFPvIJ9dFy3ExB1Q";
        $resp    = json_decode( file_get_contents( $url ), true );
        return $resp;


        // Latitude and Longitude (PHP 7 syntax)
        $lat    = $resp['results'][0]['geometry']['location']['lat'] ?? '';
        $long   = $resp['results'][0]['geometry']['location']['lng'] ?? '';


        $house['lat'] = $lat;
        $house['lng'] = $long;

        $newHouse = Housing::create($house);
        $id = $newHouse -> id;
        //store pictures
        if($request -> hasFile('file')){
            foreach($request->file as $file){
                $path = 'public/'.$id;
                Storage::makeDirectory($path);
                $filename = $id.'.'.$file->getClientOriginalName();
                $path1 = public_path('storeimg/'.$filename);
                $path2 = '../storeimg/'.$filename;
                Image::make($file->getRealPath())->resize(800,553)->save($path1);
                $image['housingID'] = $id;
                $image['fileName'] = $filename;
                $image['filePath'] = $path2;
                $image['status'] = 0;
                HousingIMG::create($image);
            }
        } else {
                $image['housingID'] = $id;
                $image['fileName'] = "default";
                $image['filePath'] = "../asset/img/default.png";
                $image['status'] = 0;
                HousingIMG::create($image);
        }


        Alert::success('发布成功');
        return redirect('/showAllMarketingHousing')->with('success', '发布成功');
    }


    public function detail($id){

            $housing = Housing::findOrfail($id);
            $agent = new Agent();
            $featureHousing = Housing::where([['uploadTypeID','<', 3],['status','=', 1]])->orderBy('updated_at', 'desc')->limit(6)->get();
            $houseIMGs = HousingIMG::where('housingID', '=', $id)->orderBy('created_at', 'desc')->get();
            $similarHousing = Housing::where([['uploadTypeID','<', 3],['status','=', 1]])->orderBy('created_at', 'desc')->limit(3)->get();
            $IMG = HousingIMG::all();
            $firstPage = HousingIMG::where('housingID', '=', $id)->first();

            $ads = AdBanner::where('route_url', '=', 'detail')->get();




            if(Auth::check()){
                $detail = History::where('userID','=',Auth::user()->id)->get();
                $flag = 0;
                foreach($detail as $d){
                    if($d->housingID == $id){
                        $d['times'] = $d['times'] + 1;
                        $d -> update();
                        $flag = 1;

                        break;
                    }
                }
                if($flag == 0){
                    error_log("DSfsdfsdfjksdhfkdsaghksghwerhfksghilskf");
                    $de['userID'] = Auth::user()->id;
                    $de['housingID'] = $id;
                    $de['times'] = 1;
                    History::create($de);
                }
            }

             if($agent -> isDesktop()){
            return view('/frontend/detail', compact('housing', 'houseIMGs','featureHousing', 'IMG', 'similarHousing', 'firstPage','agent','ads'));
        } else {
            return view('/mobile/mobileDetail', compact('housing', 'houseIMGs','featureHousing', 'IMG', 'similarHousing', 'firstPage','agent'));
        }




    }

    public function generalProperty(){
        $housing = Housing::where('uploadTypeID', '>=', 3)->where('status','>', -1)->where('isRentkeya', '=', 0)->orderBy('updated_at', 'desc')->paginate(8);
        $housing1 = Housing::where([['uploadTypeID', '>=', 3],['status','>', -1]])->orderBy('updated_at', 'desc')->get();
        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = "";
        $filterResult['filterMinPrice'] = "";
        $filterResult['filterMaxPrice'] = "";

        $ads = AdBanner::where('route_url', '=', 'genproperty')->get();

        if($agent -> isDesktop()){
            return view('/frontend/generalProperty', compact('housing','houseIMGs','agent','filterResult', 'ads'));
        } else {
            return view('/mobile/genHousing', compact('housing1','houseIMGs','agent','filterResult'));
        }
        /*return view('/frontend/generalProperty', compact('housing','houseIMGs','agent'));*/
    }

    public function search(Request $request){
        $housings = Housing::where([
            ['title', 'LIKE', '%'. $request->input('keyword') .'%'],
            ['city', 'LIKE', '%'. $request->input('address') .'%'],
        ])->orderBy('updated_at', 'desc')->paginate(8);

        $filterResult['filterCity'] = "";
        $filterResult['filterMinPrice'] = "";
        $filterResult['filterMaxPrice'] = "";
        $filterResult['filterBeds'] = "";
        $filterResult['title'] = $request->input('keyword');
        $filterResult['city'] = $request->input('address');

        $ads = AdBanner::where('route_url', '=', 'rentproperty')->get();

        $housing1 = Housing::where('title', 'like', '%' . $request->input('keyword') . '%')->orderBy('updated_at', 'desc')->get();

        $housing = $housings->appends($_GET);

        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        /*return view('/frontend/rentkeyaProperty', compact('housing','houseIMGs','agent'));*/

        if($agent -> isDesktop()){
            return view('/frontend/rentkeyaProperty', compact('housing','houseIMGs','agent', 'filterResult','ads'));
        } else {
            return view('/mobile/rentkeyaHousing', compact('housing1','houseIMGs','agent', 'filterResult'));
        }

    }

    public function showList(){
        if(Auth::check()){
            $housing = Housing::where('userID', '=', Auth::user()->id)->orderBy('updated_at', 'desc')->paginate(8);
            $agent = new Agent();
            $houseIMGs = HousingIMG::all();
            return view('/frontend/showList', compact('housing', 'agent', 'houseIMGs'));
        } else {
            Alert::error('请登录账号!');
            return redirect('/login')->with('error', '请登录账号!');
        }
    }

    public function edit($id){
        $housing = Housing::findOrfail($id);
        if(Auth::check()){
            if($housing->userID == Auth::user()->id){
                return view('/frontend/edit', compact('housing'));
            } else {
                Alert::error('请用发布者账号登录!');
                return redirect('/')->with('error', '请用发布者账号登录!');
            }
        } else {
             Alert::error('请用发布者账号登录!');
                return redirect('/')->with('error', '请用发布者账号登录!');
        }
    }

    public function editRentkeyaHousing($id,Request $request){
        $house = Housing::findorFail($id);
        $house['userID'] = Auth::user()->id;
        $house['uploadTypeID'] = Auth::user()->type;
        $house['refreshTime'] = 0;
        $house['title'] = $request->input('title');
        $house['contactPeople'] = $request->input('contactPeople');
        $house['phone'] = $request->input('phone');
        $house['wechat'] = $request->input('wechat');
        $house['address'] = $request->input('address');
        $house['city'] = $request->input('city');
        $house['publicPrice'] = $request->input('publicPrice');
        $house['description'] = $request->input('description');
        $house['originPrice'] = $request->input('originPrice');
        $house['area'] = $request->input('area');
        $house['beds'] = $request->input('beds');
        $house['baths'] = $request->input('baths');
        $house['furnitures'] = $request->input('furnitures');
        $house['washingMachines'] = $request->input('washingMachines');
        $house['dishWasher'] = $request->input('dishWasher');
        $house['elevator'] = $request->input('elevator');
        $house['oven'] = $request->input('oven');
        $house['parking'] = $request->input('parking');
        $house['electricity'] = $request->input('electricity');
        $house['web'] = $request->input('web');
        $house['floor'] = $request->input('floor');
        $house['housingAges'] = $request->input('housingAges');
        $house['status'] = 0;
        $house['gas'] = $request->input('gas');
        $house['condition'] = $request->input('condition');
        $house['progress'] = $request -> input('progress');
        $house['websiteLink'] = $request -> input('websiteLink');
        $house['size'] = $request -> input('size');
        $house['enterTime'] = $request -> input('enterTime');
        $house['contactPhone'] = $request -> input('contactPhone');
        $house['landlore'] = $request -> input('landlore');




        $house->update();
        Alert::success('修改成功');
        return redirect('/marketingUserPosting')->with('success', '修改成功');
    }

    public function editGenProperty($id, Request $request){
        $house = Housing::findOrfail($id);
        if(Auth::check()){
            $house['userID'] = Auth::user()->id;
        } else {
            $house['userID'] = 0;
        }

        $house['uploadTypeID'] = 3;
        $house['refreshTime'] = 0;
        $house['title'] = $request->input('title');
        $house['contactPeople'] = $request->input('contactPeople');
        $house['phone'] = $request->input('phone');
        $house['wechat'] = $request->input('wechat');
        $house['address'] = $request->input('address');
        $house['city'] = $request->input('city');
        $house['publicPrice'] = $request->input('publicPrice');
        $house['description'] = $request->input('description');

        $house->update();



        $img = HousingIMG::where('housingID', '=', $id)->get();
        foreach ($img as $i) {
            $i['status'] = 1;
            $i->update();
        }
        //store pictures
        if($request -> hasFile('file')){
            foreach($request->file as $file){
                $path = 'public/'.$id;
                Storage::makeDirectory($path);
                $filename = $id.'.'.$file->getClientOriginalName();
                $path1 = public_path('storeimg/'.$filename);
                $path2 = '../storeimg/'.$filename;
                Image::make($file->getRealPath())->resize(800,553)->save($path1);
                $image['housingID'] = $id;
                $image['fileName'] = $filename;
                $image['filePath'] = $path2;
                $image['status'] = 0;
                HousingIMG::create($image);
            }
        } else {
                $image['housingID'] = $id;
                $image['fileName'] = "default";
                $image['filePath'] = "../asset/img/default.png";
                $image['status'] = 0;
                HousingIMG::create($image);
        }


        Alert::success('修改成功');
        return redirect('/showList')->with('success', '修改成功');
    }

    public function refresh($id){
        if(Auth::check()){
            $housing = Housing::findOrfail($id);
            $housing['refreshTime'] = $housing['refreshTime'] + 1;
            $housing['status'] = 1;
            $housing->update();
            return redirect('/showList');
        } else {
            Alert::error('请用发布者账号登录!');
            return redirect('/showList')->with('error', '请用发布者账号登录!');
        }

    }

    public function editRentkeyaHousingPhoto($id,Request $request){

        if(Auth::check()){
             $img = HousingIMG::where('housingID', '=', $id)->get();
            foreach ($img as $i) {
                $i['status'] = 1;
                $i->update();
            }
            //store pictures
            if($request -> hasFile('file')){
                foreach($request->file as $file){
                    $path = 'public/'.$id;
                    Storage::makeDirectory($path);
                    $filename = $id.'.'.$file->getClientOriginalName();
                    $path1 = public_path('storeimg/'.$filename);
                    $path2 = '../storeimg/'.$filename;
                    Image::make($file->getRealPath())->resize(800,553)->save($path1);
                    $image['housingID'] = $id;
                    $image['fileName'] = $filename;
                    $image['filePath'] = $path2;
                    $image['status'] = 0;
                    HousingIMG::create($image);
                }
            } else {
                $image['housingID'] = $id;
                $image['fileName'] = "default";
                $image['filePath'] = "../asset/img/default.png";
                $image['status'] = 0;
                HousingIMG::create($image);
            }
            Alert::success('修改成功');
            return redirect('/showList')->with('success', '修改成功');
        } else {
            Alert::error('请用发布者账号登录!');
            return redirect('/showList')->with('error', '请用发布者账号登录!');
        }

    }

    public function editGenPropertyPho($id,Request $request){

        if(Auth::check()){
             $img = HousingIMG::where('housingID', '=', $id)->get();
            foreach ($img as $i) {
                $i['status'] = 1;
                $i->update();
            }
            //store pictures
            if($request -> hasFile('file')){
                foreach($request->file as $file){
                    $path = 'public/'.$id;
                    Storage::makeDirectory($path);
                    $filename = $id.'.'.$file->getClientOriginalName();
                    $path1 = public_path('storeimg/'.$filename);
                    $path2 = '../storeimg/'.$filename;
                    Image::make($file->getRealPath())->resize(800,553)->save($path1);
                    $image['housingID'] = $id;
                    $image['fileName'] = $filename;
                    $image['filePath'] = $path2;
                    $image['status'] = 0;
                    HousingIMG::create($image);
                }
            } else {
                $image['housingID'] = $id;
                $image['fileName'] = "default";
                $image['filePath'] = "../asset/img/default.png";
                $image['status'] = 0;
                HousingIMG::create($image);
            }
            Alert::success('修改成功');
            return redirect('/showList')->with('success', '修改成功');
        } else {
            Alert::error('请用发布者账号登录!');
            return redirect('/showList')->with('error', '请用发布者账号登录!');
        }

    }

    public function photoControl($id){
        if(Auth::check()){
            $housing = Housing::findOrfail($id);
            return view('/frontend/photoControl',compact('housing'));
        } else {
            Alert::error('请用发布者账号登录!');
            return redirect('/showList')->with('error', '请用发布者账号登录!');
        }
    }

    public function userdelete($id){
        if(Auth::check()){
            $housing = Housing::findOrfail($id);
            $housing['status'] = -2;
            $housing->update();
            Alert::success('删除成功');
            return redirect('/showList');
        } else {
            Alert::error('请用发布者账号登录!');
            return redirect('/showList')->with('error', '请用发布者账号登录!');
        }
    }

    public function addFavorite($id){
         if(Auth::check()){
                $detail = Favorite::where('userID','=',Auth::user()->id)->get();
                $flag = 0;
                foreach($detail as $d){
                    if($d->housingID == $id){
                        break;
                    }
                }
                if($flag == 0){
                    $de['userID'] = Auth::user()->id;
                    $de['housingID'] = $id;
                    $de['status'] = 1;
                    Favorite::create($de);
                }
            }
    }

    //rentkeyaProperty Filter
    public function filter(Request $request){

      if(is_null($request->input('minPrice'))){
          $minPrice = 0;
      }else{
          $minPrice = (int)($request -> input('minPrice'));
      }
      //cast maxPrice
      if(is_null($request->input('maxPrice'))){
          $maxPrice = 10000;
      } else{
          $maxPrice = (int)($request -> input('maxPrice'));
      }

      $compare_sign = "=";
      $beds = $request->input('beds');
      if(is_null($request->input('beds'))){
        $beds  = 0;
        $compare_sign = ">=";
      }

      $housings = Housing::where([
          ['city', 'LIKE', '%'. $request->input('city') .'%'],
          ['uploadTypeID', '<', 3],
          ['publicPrice', '>=', $minPrice],
          ['publicPrice', '<=', $maxPrice],
          ['beds', $compare_sign , (int)$beds],
      ])->orderBy('updated_at', 'desc') -> paginate(8);

      $housing = $housings->appends($_GET);


        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = $request->input('city');
        $filterResult['filterMinPrice'] = $minPrice;
        $filterResult['filterMaxPrice'] = $maxPrice;
        $filterResult['filterBeds'] = $request->input('beds');
        $filterResult['title'] = "";
        $filterResult['city'] = "";

        $ads = AdBanner::where('route_url', '=', 'rentproperty')->get();
        return view('/frontend/rentkeyaProperty',compact('housing','houseIMGs','agent', 'filterResult','ads'));
    }

    //general Property Filter
    public function genFilter(Request $request){
        //cast minPrice
        if(is_null($request->input('minPrice'))){
            $minPrice = 0;
        }else{
            $minPrice = (int)($request -> input('minPrice'));
        }
        //cast maxPrice
        if(is_null($request->input('maxPrice'))){
            $maxPrice = 10000;
        } else{
            $maxPrice = (int)($request -> input('maxPrice'));
        }
        $housings = Housing::where([
            ['city', 'LIKE', '%'. $request->input('city') .'%'],
            ['uploadTypeID', '=', 3],
            ['publicPrice', '>=', $minPrice],
            ['publicPrice', '<=', $maxPrice],
        ])->orderBy('updated_at', 'desc') -> paginate(8);

        $housing = $housings->appends($_GET);

        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = $request->input('city');
        $filterResult['filterMinPrice'] = $minPrice;
        $filterResult['filterMaxPrice'] = $maxPrice;

        $ads = AdBanner::where('route_url', '=', 'rentproperty')->get();
        return view('/frontend/generalProperty',compact('housing','houseIMGs','agent', 'filterResult', 'ads'));
    }

    public function searchFilter(Request $request){
        //cast minPrice
        if(is_null($request->input('minPrice'))){
            $minPrice = 0;
        }else{
            $minPrice = (int)($request -> input('minPrice'));
        }
        //cast maxPrice
        if(is_null($request->input('maxPrice'))){
            $maxPrice = 10000;
        } else{
            $maxPrice = (int)($request -> input('maxPrice'));
        }
        $housings = Housing::where([
            ['city', 'LIKE', '%'. $request->input('city') .'%'],
            ['uploadTypeID', '<', 3],
            ['publicPrice', '>=', $minPrice],
            ['publicPrice', '<=', $maxPrice],
            ['beds', 'LIKE', '%'. $request->input('beds') .'%'],
            ['']
        ])->orderBy('updated_at', 'desc') -> paginate(8);

        $housing = $housings->appends($_GET);

        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = $request->input('city');
        $filterResult['filterMinPrice'] = $minPrice;
        $filterResult['filterMaxPrice'] = $maxPrice;
        $filterResult['filterBeds'] = $request->input('beds');
        return view('/frontend/rentkeyaProperty',compact('housing','houseIMGs','agent', 'filterResult'));
    }
    public function propertyArea($id) {
        if ($id == 'VN') {
            $id = "温哥华";
        }
        $housings = Housing::where([
            ['area', 'LIKE', '%'. $id .'%'],
        ])->orderBy('updated_at', 'desc') -> paginate(8);
        $housing = $housings->appends($_GET);
        $houseIMGs = HousingIMG::all();
        $agent = new Agent();

        $filterResult['filterCity'] = "";
        $filterResult['filterMinPrice'] = "";
        $filterResult['filterMaxPrice'] = "";
        $filterResult['filterBeds'] = "";
        $filterResult['title'] = "";
        $filterResult['city'] = "";

        $ads = AdBanner::where('route_url', '=', 'rentproperty')->get();
        return view('/frontend/rentkeyaProperty',compact('housing','houseIMGs','agent', 'filterResult', 'ads'));
    }




}
