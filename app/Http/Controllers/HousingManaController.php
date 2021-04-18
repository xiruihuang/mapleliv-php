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

class HousingManaController extends Controller
{
    public function showAllGenHousing(){
    	if(Auth::check()){
    		if((Auth::user()->type == 1) || (Auth::user()->type == -1)){
    			$housing = Housing::where('uploadTypeID','>=',3)->get();
    			return view('/admin/housingManagement/showAllGenHousing', compact('housing'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function showAllRentkeyaHousing(){
    	if(Auth::check()){
    		if((Auth::user()->type == 1) || (Auth::user()->type == -1)){
    			$housing = Housing::where('uploadTypeID','<',3)->orwhere('isRentkeya',1)->get();
    			return view('/admin/housingManagement/showAllRentkeyaHousing', compact('housing'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function finish($id){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$housing = Housing::findOrfail($id);
    			$housing['status'] = 1;
    			$housing->update();
    			$originalPrice = $housing->originPrice;
    			$publicPrice = $housing->publicPrice;
    			$profit['profit'] = $publicPrice - $originalPrice;
    			$profit['housingID'] = $housing->id;
    			$profit['uploadUserID'] = $housing->userID;
    			$newProfit = Profit::create($profit);
    			Alert::success('发布成功');
    			return redirect('/showAllRentkeyaHousing')->with('success', '发布成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }
    public function delete($id){
      if(Auth::check()){
          if(Auth::user()->type == -1){
              $housing = Housing::findOrfail($id);
               $housing['status'] = -2;
               $housing->update();
               $originalPrice = $housing->originPrice;
               $publicPrice = $housing->publicPrice;
             $profit['profit'] = $publicPrice - $originalPrice;
              $profit['housingID'] = $housing->id;
              $profit['uploadUserID'] = $housing->userID;
              $newProfit = Profit::create($profit);
              Alert::success('删除成功');
              return redirect('/showAllRentkeyaHousing')->with('success', '删除成功');
           } else {
               return redirect('/');
           }
      } else {
           Alert::error('Please Log in as Administrator!');
           return redirect('/login')->with('error', 'Please Log in as Administrator!');
       }
    }
}
