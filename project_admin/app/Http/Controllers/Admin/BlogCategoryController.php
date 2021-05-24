<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoryblog;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_category = Categoryblog::all();
        return view("admin/blog_category/list", compact('blog_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($_POST['btnAddCategory'])){
            $request->validate([
                'title' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
            ]);
            $blog_category = new Categoryblog;
            $blog_category->title_category_blog = $request->title;
            $blog_category->save();
            return back()->with("alert", "ADD BLOG CATEGORY SUCCESS");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return back()->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if($_POST['btnUpdateCategory']){
            $blog_category = Categoryblog::find($id);
            $request->validate([
                'title' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
            ]);
            $blog_category->title_category_blog = $request->title;
            $blog_category->save();
            return back()->with("alert", "UPDATE BLOG CATEGORY ID = $id SUCCESS");
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Categoryblog::find($id);
        $blog->delete();
        return back()->with('alert', "DELETE BLOG id = $id SUCCESS");
    }
}
