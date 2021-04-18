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

class ProfitController extends Controller
{
    public function showAllProfit(){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$profit = Profit::all();
    			$user = User::all();
    			return view('/admin/profitManagement/showAllProfit', compact('profit', 'user'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }
}
