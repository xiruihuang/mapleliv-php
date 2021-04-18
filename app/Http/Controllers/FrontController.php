<?php

namespace App\Http\Controllers;

use App\AdBanner;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\User;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Housing;
use App\Type;
use App\HousingIMG;
use App\Message;
use App\History;
use Illuminate\Support\Collection;


class FrontController extends Controller
{
    public function index(){
    	$agent = new Agent();
    	$housings = Housing::where('uploadTypeID','<', 3)->orderBy('updated_at', 'desc')->get();
        $houseIMGs = HousingIMG::all();
        $housing = [];
        $ads = AdBanner::where('route_url', '=', 'home')->get();
        $index = 0;


        foreach($housings as $h){
            if($h -> status == 1){
                $housing[$index] = $h;
                $index++;
                if($index == 6){
                    break;
                }
            }
        }
       
/*return view('welcome',compact('agent','housing','houseIMGs'));*/
       
        if($agent -> isDesktop()){
            return view('welcome',compact('agent','housing','houseIMGs','ads'));
        } else {
            return view('/mobile/index', compact('agent','housing','houseIMGs'));
        }
    

    	
    }

    public function mobile(){
        return view('/mobile/index');
    }

    public function showAgent(){
    	return view('/frontend/showAgent');
    }

    public function aboutUs(){
        $agent = new Agent();
    	return view('/frontend/aboutUs', compact('agent'));
    }

    public function contactUs(){
        return view('/frontend/contactUs');
    }

    public function sentMessage(Request $request){
        $message['name'] = $request -> input('name');
        $message['phone'] = $request -> input('phone');
        $message['message'] = $request -> input('message');
        $message['email'] = $request -> input('email');
        Alert::success('发布成功, Rentkeya客服将会很快跟您联系');
        return redirect('/')->with('success', 'Rentkeya客服将会很快跟您联系');
    }

    public function my(){
        $user = Auth::user();
        return view('/mobile/my',compact('user'));
    }

    public function history(){
        $his = History::where('userID', '=', Auth::user()->id)->get();

        $housing = collect();
        foreach($his as $h){
            $hou = Housing::where('id','=',$h->housingID)->first();
            $housing ->push($hou);
        }


        $houseIMGs = HousingIMG::all();
        return view('/mobile/history', compact('housing','houseIMGs'));
    }

    public function mobileAbout(){
        $agent = new Agent();
        return view('/mobile/about',compact('agent'));
    }

    public function mobileTeam(){
        $agent = new Agent();
        return view('/mobile/team',compact('agent'));
    }

    public function mobileContact(){
        $agent = new Agent();
        return view('/mobile/contact',compact('agent'));
    }
}
