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
use App\Renter;

class RenterController extends Controller
{
    public function showAllRenter(){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){

    			$renters = Renter::all();
    			$users = User::all();
    			return view('/admin/renterManagement/showAllRenter',compact('renters', 'users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function createRenter(){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			return view('/admin/renterManagement/createRenter');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function uploadRenter(Request $request){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){

    			$retner['name'] = $request -> input('name');
    			$retner['gender'] = $request -> input('gender');
    			$retner['phone'] = $request -> input('phone');
    			$retner['wechat'] = $request -> input('wechat');
    			$retner['favoriteLocation'] = $request -> input('favoriteLocation');
    			$retner['favoriteNumberOfBeds'] = $request -> input('favoriteNumberOfBeds');
    			$retner['favoritenumberOfBaths'] = $request -> input('favoritenumberOfBaths');
    			$retner['favoritePrice'] = $request -> input('favoritePrice');
    			$retner['enterTime'] = $request -> input('enterTime');
    			$retner['otherRequirment'] = $request -> input('otherRequirment');
    			$retner['description'] = $request -> input('description');

    			$retner['status'] = 1;
    			$retner['salesID'] = Auth::user()->id;

    			$newRenter = Renter::create($retner);

    			Alert::success('登记成功');
    			return redirect('/showAllRenter')->with('success', '登记成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function deletingRenter($id){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$renter = Renter::findorFail($id);
    			$renter['status'] = -1;
    			$newRenter = $renter->update();
    			Alert::success('移除成功');
    			return redirect('/showAllRenter')->with('success', '移除成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function renterDetail($id){
        if(Auth::check()){
            if(Auth::user()->type < 3){

                $renters = Renter::findorFail($id);
                $users = User::all();
                return view('/admin/renterManagement/renterDetail',compact('renters', 'users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function editRenter($id){
        if(Auth::check()){
            if(Auth::user()->type < 3){

                $renters = Renter::findorFail($id);
                $users = User::all();
                return view('/admin/renterManagement/editRenter',compact('renters', 'users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function updateRenter(Request $request, $id){
        if(Auth::check()){
            if(Auth::user()->type < 3){

                $retner = Renter::findorFail($id);
                $retner['name'] = $request -> input('name');
                $retner['gender'] = $request -> input('gender');
                $retner['phone'] = $request -> input('phone');
                $retner['wechat'] = $request -> input('wechat');
                $retner['favoriteLocation'] = $request -> input('favoriteLocation');
                $retner['favoriteNumberOfBeds'] = $request -> input('favoriteNumberOfBeds');
                $retner['favoritenumberOfBaths'] = $request -> input('favoritenumberOfBaths');
                $retner['favoritePrice'] = $request -> input('favoritePrice');
                $retner['enterTime'] = $request -> input('enterTime');
                $retner['otherRequirment'] = $request -> input('otherRequirment');
                $retner['description'] = $request -> input('description');

                $retner['status'] = 1;
                $retner['salesID'] = Auth::user()->id;

                $newRenter = $retner -> update();

                Alert::success('修改成功');
                return redirect()->back();
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }
}
