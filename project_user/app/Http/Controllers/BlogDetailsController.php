<?php

namespace App\Http\Controllers;

use App\Blogdetail;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    function show($id){
        $blog_detail = Blogdetail::all();
        return view("user/blogdetails", compact('blog_detail' ,'id'));
    }
}
