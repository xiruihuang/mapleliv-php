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

class AdminController extends Controller
{

    public function admin(){
    	if(Auth::check()){
    		if(Auth::user()->type < 3){
    			$user = Auth::user();
                $userCount = Auth::user()->count();
               
                $profit = Profit::all();
                $total = 0;
                foreach($profit as $p){
                    $total = $total + $p->profit;
                
                }

                $now = \Carbon\Carbon::now();
                $weekStart = \Carbon\Carbon::now()->subDays(\Carbon\Carbon::now()->dayOfWeek)->setTime(0, 0);
                $thisWeekStudent = Housing::where('created_at', '>=', $weekStart)->count();
                $lastWeek = \Carbon\Carbon::now()->subDays(\Carbon\Carbon::now()->dayOfWeek)->subWeek();
                $lastWeekStudent = Housing::whereBetween('created_at', [$lastWeek,$weekStart])->count();
                if($thisWeekStudent != 0){
                    $lastWeekPre = ($thisWeekStudent - $lastWeekStudent) / $thisWeekStudent * 100;
                    $roundedStudent = number_format($lastWeekPre);
                } else {
                    $roundedStudent = 0;
                }

                $ttlPro = [];
                $ttlMyPro = [];
                    for($i = 0; $i < 31; $i++){
                        $pros = Profit::where('created_at', '<=', \Carbon\Carbon::now()->subDays($i))->get();
                        $ttl = 0;
                        foreach($pros as $p){
                            $ttl = $ttl + $p->totalProfit;
                        }
                        $ttlPro[$i] = $ttl;
                        $ttlMyPro[$i] = $ttl;

                    }

                $housing = Housing::where('status', '=', 1)->get()->count();
    			return view('/admin/index', compact('user','total','userCount', 'housing','thisWeekStudent', 'ttlPro', 'ttlMyPro'));
    		} else {
                Alert::error('Please Log in as Administrator!');
    			return redirect('/')->with('error', 'Please Log in as Administrator!');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}

    }
}
