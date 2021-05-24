<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorycollection;
use Illuminate\Http\Request;

class ProductCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_collection = Categorycollection::all();
        return view("admin/product_category/list_collection", compact('product_collection'));
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
        if(isset($_POST['btnAddCollection'])){
            $request->validate([
                'title' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
            ]);
            $product_collection = new Categorycollection;
            $product_collection->collection = $request->title;
            $product_collection->save();
            return back()->with("alert", "ADD PRODUCT COLLECTION SUCCESS");
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
            $product_collection = Categorycollection::find($id);
            $request->validate([
                'title' => 'required|regex:/^[a-zA-Z0-9-._ ]+$/|min:3|max:40',
            ]);
            $product_collection->collection = $request->title;
            $product_collection->save();
            return back()->with("alert", "UPDATE PRODUCT COLLECTION ID = $id SUCCESS");
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
        $product = Categorycollection::find($id);
        $product->delete();
        return back()->with('alert', "DELETE PRODUCT COLLECTION IDT = $id SUCCESS");
    }
}
