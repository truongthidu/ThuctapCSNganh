<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Categoryblog;
use App\Models\Status;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request, $next){
            session(['module_active' => 'blog']);
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(6);
        $blogCategory = Categoryblog::all();
        return view("admin/blog/list", compact('blog', 'blogCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $blogCategory = Categoryblog::all();
        return view("admin/blog/create", compact('status', 'blogCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        if(isset($_POST['btnAddBlog'])){
            $request->validate(
                [
                    'title' => "required|min:5|max:100",
                    'content' => "required|min:5|max:1000",
                    'category' => "required",
                    'status' => "required",
                    'image' => 'bail|image|mimes:jpg,jpeg,png,gif|max:5000',
                ],
                [
                    'image' => "The select file must be an image",
                    'mimes' => 'The picture file with incorrect format(e.g: ".jpg", ".jpeg", ".png", ".gif")',
                    'max' => 'The pictures are limited to no more than 5M',
                ]
            );
            if($request->hasFile("image")){
                $destination_path = 'public/images/blog';
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                $image->storeAs($destination_path, $imageName);
                $blog->create([
                    'title_blog' => $request->title,
                    'img_blog' => $imageName,
                    'content_blog' => $request->content,
                    'categoryblog_id' => $request->category,
                    'status_blog' => $request->status,
                ]);
            }
            // return $request;
            return redirect()->route("blog.index")->with('alert', "ADD BLOG SUCCESS");
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
        $blog = Blog::find($id);
        $status = Status::all();
        $blogCategory = Categoryblog::all();
        return view("admin/blog/edit", compact('blog', 'status', 'blogCategory'));
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
        if(isset($_POST['btnUpdateBlog'])){
            $blog = Blog::find($id);
            $request->validate(
                [
                    'title' => "required|min:5|max:100",
                    'content' => "required|min:5",
                    'category' => "required",
                    'status' => "required",
                    'image' => 'bail|image|mimes:jpg,jpeg,png,gif|max:5000',
                ],
                [
                    'image' => "The select file must be an image",
                    'mimes' => 'The picture file with incorrect format(e.g: ".jpg", ".jpeg", ".png", ".gif")',
                    'max' => 'The pictures are limited to no more than 5M',
                ]
            );
            $destination_path = 'public/images/blog';
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
            // return $request;
            $blog->title_blog = $request->title;
            $blog->img_blog = $imageName;
            $blog->content_blog = $request->content;
            $blog->categoryblog_id = $request->category;
            $blog->status_blog = $request->status;
            $blog->save();
            return redirect()->route("blog.index")->with('alert', "UPDATE BLOG ID = $id SUCCESS");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return back()->with('alert', "DELETE BLOG id = $id SUCCESS");
    }
}
