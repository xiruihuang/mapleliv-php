<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmialForm;
use Alert;

class SendForm extends Controller
{
    function send() {
        Mail::to('576771189@qq.com')->send(new SendEmialForm());
        return back()->with('success');
    }

    function form() {
        return view('form');
    }

    function formEn() {
        return view('form-en');
    }

    function sendForm(Request $request) {
        $date = [
            'name' => $request -> name,
            'wechat' => $request ->  wechat,
            'occupation' => $request ->  occupation,
            'colleage' => $request ->  colleage,
            'area' => $request ->  area,
            'pat' => $request ->  pat,
            'budget' => $request ->  budget,
            'furnitures' => $request ->  furnitures,
            'park' => $request ->  park,
            'check' => $request ->  check,
            'prepaid' => $request ->  prepaid,
            'studentPermit' => $request ->  file('studentPermit'),
            'offer' => $request ->  file('offer'),
            'passport' => $request ->  file('passport'),
            'bank' => $request ->  file('bank')
        ];

        Mail::to('maplelivinginfo@gmail.com')->send(new SendEmialForm($date));
        Alert::success('成功');
        return redirect('/')->with('success', '成功');
    }
}
