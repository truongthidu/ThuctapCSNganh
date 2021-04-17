<?php

namespace App\Http\Controllers;

use App\NewClothing;

class NewClothingController extends Controller
{
    //
    function show(){
        $newclothing = NewClothing::all();
        return view('user/newclothing', compact('newclothing'));
    }
}
