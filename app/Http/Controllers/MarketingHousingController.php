<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Housing;
use App\Type;
use App\HousingIMG;
use DB;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Agent;
use Intervention\Image\ImageManagerStatic as Image;
use App\Profit;

class MarketingHousingController extends Controller
{
    public function addMarketingHousing(Request $request){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			return view('/admin/marketingHousingManagement/addRentkeyaHousing');

    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function showAllMarketingHousing(){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$housing = Housing::where('uploadTypeID', '<', 3)->orderBy('updated_at')->get();
        		$houseIMGs = HousingIMG::all();
        		$users = User::all();
        		return view('/admin/marketingHousingManagement/showAllMarketingHousing',compact('housing', 'houseIMGs','users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function marketingPosting($id){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$housing = Housing::findorFail($id);
        		$housing['status'] = 1;
        		$newHousing = $housing -> update();
        		Alert::success('发布成功');
    			return redirect()->back()->with('success', '发布成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function marketingDeleting($id){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$housing = Housing::findorFail($id);
        		$housing['status']=2;
        		$newHousing = $housing -> update();

        		Alert::success('移除成功');
    			return redirect()->back()->with('success', '移除成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function marketingUserPosting(){
		if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$id = Auth::user()->id;
    			$housing = Housing::where('userID', '=', $id)->get();
        		$users = User::all();
    			return view('/admin/marketingHousingManagement/marketingUserPosting', compact('housing','users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function editMarketingPosting($id){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			
    			$housing = Housing::findorFail($id);
        		$users = User::all();
    			return view('/admin/marketingHousingManagement/editMarketingPosting', compact('housing','users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function marketingHousingDetail($id){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                
                $housing = Housing::findorFail($id);
                $users = User::all();
                return view('/admin/marketingHousingManagement/marketingHousingDetail', compact('housing','users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    } 

    public function goBack(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                
               return back();
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function live(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                $housing = Housing::where('uploadTypeID', '<', 3)->orderBy('updated_at', 'asc')->get();
                $houseIMGs = HousingIMG::all();
                $users = User::all();
                return view('/admin/marketingHousingManagement/live',compact('housing', 'houseIMGs','users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function dead(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                $housing = Housing::where('uploadTypeID', '<', 3)->orderBy('updated_at', 'asc')->get();
                $houseIMGs = HousingIMG::all();
                $users = User::all();
                return view('/admin/marketingHousingManagement/dead',compact('housing', 'houseIMGs','users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function addMarketingPictures($id){
        if(Auth::check()){
            if(Auth::user()->type < 3){
               $housing = Housing::findorFail($id);
                return view('/admin/marketingHousingManagement/addMarketingPictures',compact('housing'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function uploadMarketingPictures($id,Request $request){
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
        return redirect('/marketingUserPosting')->with('success', '修改成功');

    }


    public function modifiedPictures($id){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                
                return view('/admin/marketingHousingManagement/modifiedPictures',compact('id'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function modifiedPicture($id, Request $request){
        if(Auth::check()){
            if(Auth::user()->type < 3){
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
                    

                    Alert::success('发布成功');
                    return redirect('/showAllMarketingHousing')->with('success', '发布成功');
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }









}
