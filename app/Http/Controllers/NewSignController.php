<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
use DateTime;
use App\Call;

class NewSignController extends Controller
{
   public function signIn(Request $request){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                $id = Auth::user()->id;
                $user = User::findorFail($id);
                $lastSign = 0;
                $totalSign = Call::where('userID', '=',$id)-> orderBy('id', 'desc')->get();
                foreach ($totalSign as $t) {
                    $lastSign = $t;
                    break;
                }




                
                if($lastSign = null || $lastSign['status'] != 1){
                    $sign['userID'] = $id;
                    $sign['userFirstName'] = $user->firstName;
                    $sign['userLastName'] = $user->lastName;
                    $sign['IpAddressArrive'] = $request->getClientIp();
                    $sign['ArriveTime'] = date_create();
                    $sign['arriveDay'] = $sign['ArriveTime'] ->format('d');
                    $sign['arriveHour'] = $sign['ArriveTime'] ->format('h');
                    $sign['arriveMin'] = $sign['ArriveTime'] ->format('i');
                    $sign['status'] = 1;
                    $a = $sign['ArriveTime'] ->format('Y-m-d H:i:s');
                    $sign['arriveDate'] = $sign['ArriveTime'] ->format('Y-m-d');

                    if(strtotime($sign['ArriveTime'] -> format('Y-m-d')) == strtotime($sign['arriveDate'])){
                        error_log('1111111111111111111111');
                        error_log(strtotime($sign['ArriveTime'] -> format('Y-m-d')) > strtotime($sign['arriveDate']));
                        error_log('1111111111111111111111111111111111');
                    }


                    $newSign = Call::create($sign);
                    error_log('1111111111111111111111');
                    error_log('1111111111111111111111');
                    error_log($newSign['status']);
                    error_log($newSign['arriveDate']);
                    error_log('1111111111111111111111111111111111');
                    error_log('1111111111111111111111111111111111');



                Alert::success('签到成功');
                return redirect('/showAllSign')-> with('success', $a);
                } else {
                    
                Alert::warning('请先签退');
                    return redirect('/signPage')-> with('warning', '请先签退');
                }
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
                $lastSign = 0;
                $totalSign = Call::where('userID', '=',$id)-> orderBy('id', 'desc')->get();
                foreach ($totalSign as $t) {
                    $lastSign = $t;
                    break;
                }

                $arriveHour = $lastSign['ArriveTime'];
                if($lastSign == null || $lastSign['status'] == -1){
                    Alert::warning('请先签到');
                    return redirect('/signPage')-> with('warning', '请先签到');
                } else {
                    $lastSign['IpAddressBack'] = $request->getClientIp();
                    $lastSign['BackTime'] = date_create();
                    $lastSign['status'] = -1;



                    




                    if((int)($lastSign['BackTime'] ->format('d')) == (int)($lastSign['arriveDay'])){

                        if(((int)($lastSign['BackTime'] ->format('i')) + 20) >= (int)($lastSign['arriveMin'])){
                            $lastSign['totalHour'] = (int)($lastSign['BackTime']->format('h')) - (int)($lastSign['arriveHour']);
                            if($lastSign['totalHour'] < 0) {
                                $lastSign['totalHour'] = $lastSign['totalHour'] + 12;
                            }

                            
                        } else {
                            $lastSign['totalHour'] = (int)($lastSign['BackTime']->format('h')) - (int)($lastSign['arriveHour']) - 1;
                            if($lastSign['totalHour'] < 0) {
                                $lastSign['totalHour'] = $lastSign['totalHour'] + 12;
                            }
                            
                        }



                    } else {
                        $lastSign['totalHour'] = 5;
                    }
                    $a = $lastSign['BackTime'] ->format('Y-m-d H:i:s');
                    $lastSign->update();
                    Alert::success('签退成功');
                    return redirect('/showAllSign') -> with('success', $a);

                }
            }
        }
    }


    public function signPage(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                
                return view('/admin/signInManagement/signPage');
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function showAllSign(){
        if(Auth::check()){
            if(Auth::user()->type < 3){
                if(Auth::user()->type == 1){
                    $sign = Call::all();
                    
                }

                elseif (Auth::user()->type == 2) {
                    

                    $sign = Call::where('userId', '=', Auth::user()->id)->get();

                }
                $user = User::where('type', '<', 3) -> get();

                return view('/admin/signInManagement/showAllSign',compact('sign','user'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }


    public function getTotalHour(Request $request){
        if(Auth::check()){
            if(Auth::user()->type < 2){
                
                
                $totalHour = 0;
                $startDay = date("Y-m-d",strtotime($request -> input('start')));
                $endDay = date("Y-m-d",strtotime($request -> input('end')));


                $user = Call::where([['userID', '=',$request -> input('userID')],['arriveDate', '>=', $startDay], ['arriveDate','<=', $endDay]]) -> get();

                error_log($startDay);
                error_log($endDay);

                foreach ($user as $u) {
                    $totalHour = $totalHour + $u['totalHour'];
                }

                error_log('44444444444444444444');
                error_log($user);
                error_log('555555555555555555555555555555555');

               Alert::success('总时长为');
                return redirect('/showAllSign')-> with('success', '总时长为'.$totalHour);
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }







}
