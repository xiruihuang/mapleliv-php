<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmialForm;

class SendForm extends Controller
{
    function send() {
        Mail::to('576771189@qq.com')->send(new SendEmialForm());
        return back()->with('success');
    }
}
