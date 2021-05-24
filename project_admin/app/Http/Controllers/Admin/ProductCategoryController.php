<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryClothing;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_category = CategoryClothing::all();
        return view("admin/product_category/list", compact('product_category'));
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
            $product_category = new CategoryClothing;
            $product_category->title_category_clothing = $request->title;
            $product_category->save();
            return back()->with("alert", "ADD PRODUCT CATEGORY SUCCESS");
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
            $product_category = CategoryClothing::find($id);
            $request->validate([
                'title' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
            ]);
            $product_category->title_category_product = $request->title;
            $product_category->save();
            return back()->with("alert", "UPDATE product CATEGORY ID = $id SUCCESS");
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
        $product = CategoryClothing::find($id);
        $product->delete();
        return back()->with('alert', "DELETE product id = $id SUCCESS");
    }
}
