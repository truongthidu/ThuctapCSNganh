<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    //
    function show($id){
        $blog = Blog::find($id);
        return view("user/blogdetails", compact('blog'));
    }
}
