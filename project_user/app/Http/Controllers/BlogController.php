<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Blogdetail;
use App\Recentblog;
use App\Categoryblog;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    use SoftDeletes;

    function show(){
        $blog = Blog::all();
        $category_blog = Categoryblog::all();
        $recent_blog = Recentblog::all();
        return view('user/blog', compact('blog', 'category_blog', 'recent_blog'));
    }
}
