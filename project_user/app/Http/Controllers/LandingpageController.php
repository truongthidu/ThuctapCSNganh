<?php

namespace App\Http\Controllers;

use App\Child;
use App\Featuremen;
use App\Featurewomen;
use App\Men;
use App\Women;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    function show(){
        $feature_men = Featuremen::all();
        $feature_women = Featurewomen::all();
        return view('user/landingpage', compact('feature_men', 'feature_women'));
    }
}
