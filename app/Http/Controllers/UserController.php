<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Type;
use Alert;

class UserController extends Controller
{
    public function showAllGenUsers(){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$users = User::where('type','=',3)->get();
    			return view('/admin/userManagement/showAllGenUsers', compact('users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function showAllMarketUsers(){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$users = User::where('type','=',2)->get();
    			return view('/admin/userManagement/showAllMarketUsers', compact('users'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

 	public function showAllTypes(){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$types = Type::all();
    			return view('/admin/userManagement/showAllTypes', compact('types'));
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function createTypes(){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			return view('/admin/userManagement/createTypes');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    }

    public function postTypes(Request $request){
    	if(Auth::check()){
    		if(Auth::user()->type == 1){
    			$type['name'] = $request->input('name');
    			$type['detail'] = $request->input('detail');
    			$type['count'] = 0;
    			$newType = Type::create($type);
    			Alert::success('发布成功');
    			return redirect('/showAllTypes') -> with('success', '发布成功');
    		} else {
    			return redirect('/');
    		}
    	} else {
    		Alert::error('Please Log in as Administrator!');
    		return redirect('/login')->with('error', 'Please Log in as Administrator!');
    	}
    } 

    public function verifyMarketing($id){
        if(Auth::check()){
            if(Auth::user()->type == 1){
                $users = User::findorFail($id);
                $users['type'] = 2;
                $users->update();
                Alert::success('修改成功');
                return redirect('/showAllGenUsers') -> with('success', '发布成功');;
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function verifyGeneral($id){
        if(Auth::check()){
            if(Auth::user()->type == 1){
                $users = User::findorFail($id);
                $users['type'] = 3;
                $newUser = $users->update();
                Alert::success('修改成功');
                return redirect('/showAllGenUsers') -> with('success', '发布成功');;
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }



}
