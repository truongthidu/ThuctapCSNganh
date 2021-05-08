<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    //
    function show(){
        return view('user/introduce');
    }
}
