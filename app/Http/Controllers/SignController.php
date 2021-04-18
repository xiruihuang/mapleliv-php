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
use App\Ip;
use DateTime;
use App\Sign;

class SignController extends Controller
{
    public function showAllSignIn(){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			if(Auth::user()->type == 1){
    				$ips = Ip::all();
                }

    			elseif (Auth::user()->type == 2) {
    				

    				$ips = Ip::where('userId', '=', Auth::user()->id)->get();
    			}
    			return view('/admin/signInManagement/showAllSignIn',compact('ips'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function signIn(Request $request){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$id = Auth::user()->id;
    			$user = User::findorFail($id);

    			$ip['userID'] = $id;
    			$ip['userFirstName'] = $user->firstName;
    			$ip['userLastName'] = $user->lastName;
    			$ip['IpAddress'] = $request->getClientIp();
    			$ip['status'] = 1;
  				$newIp = Ip::create($ip);
    			Alert::success('签到成功');
    			return redirect('/admin')-> with('success', '签到成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function signOut(Request $request){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$id = Auth::user()->id;
    			$user = User::findorFail($id);

    			$ip['userID'] = $id;
    			$ip['userFirstName'] = $user->firstName;
    			$ip['userLastName'] = $user->lastName;
    			$ip['IpAddress'] = $request->getClientIp();
    			$ip['status'] = 2;
  				$newIp = Ip::create($ip);


                $sign['userID'] = $id;
                $time = $newIp->created_at;
                $dsf = Ip::where([['userID', '=', $id],['status', '=', 1]])->first();
                $date = $dsf->created_at;
                $sign['year'] = $time->format('Y');
                $sign['month'] = $time->format('m');
                $sign['date'] = $time->format('d');
                $diff = $date ->diff($time);
                $sign['workingHours'] = $diff->h;
                $sign['workingMinutes'] = $diff->i;
                Sign::create($sign);


    			Alert::success('签退成功');
    			return redirect('/admin')-> with('success', '签退成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function showAllWorkingHours(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                if(Auth::user()->type == 1){
                    $ips = Sign::all();
                    $users = User::all();
                }

                elseif (Auth::user()->type == 2) {
                    

                    $ips = Sign::where('userId', '=', Auth::user()->id)->get();
                    $users = User::all();
                }
                return view('/admin/signInManagement/showAllWorkingHours',compact('ips','users'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }
}
