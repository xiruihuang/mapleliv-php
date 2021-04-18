<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sweetalertController extends Controller
{
     public function alert($AlertType){
	 switch ($AlertType) {
	 case 'success':
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 case 'info':
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 case 'warning':
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 case 'error':
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 case 'message':
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 
	 default:
	 Alert::success('Hello World!')->autoclose(3000);
	 return redirect('/login');
	 break;
	 }
 }
}
