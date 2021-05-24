<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoryclothing;
use App\Models\Categorycollection;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request, $next){
            session(['module_active' => 'product']);
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
        //
        $product = Product::paginate(10);
        $productCate = Categoryclothing::all();
        $productCollect =  Categorycollection::all();
        return view("admin/product/list", compact('product', 'productCate', 'productCollect'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = Product::paginate(10);
        $productCate = Categoryclothing::all();
        $productCollect =  Categorycollection::all();
        $status = Status::all();
        $collection = Categorycollection::all();
        return view("admin/product/create", compact('product', 'productCate', 'productCollect', 'status', 'collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        if(isset($_POST['btnAddProduct'])){
            $request->validate(
                [
                    'title' => "required|min:5|max:100",
                    'price' => "required",
                    'discount' => "required",
                    'qty' => "required",
                    'description' => "required|min:5|max:100",
                    'detail' => "required|min:5",
                    'category' => "required",
                    'collection' => "required",
                    'status' => "required",
                    'img' => 'bail|required|image|mimes:jpg,jpeg,png,gif|max:5000',
                ],
                [
                    'image' => "The select file must be an image",
                    'mimes' => 'The picture file with incorrect format(e.g: ".jpg", ".jpeg", ".png", ".gif")',
                    'max' => 'The pictures are limited to no more than 5M',
                ]
            );
            if($request->hasFile("img")){
                $destination_path = 'public/images/product';
                $image = $request->file('img');
                $imageName = $image->getClientOriginalName();
                $image->storeAs($destination_path, $imageName);
                $product->create([
                    'name' => $request->title,
                    'price' => $request->price,
                    'discount' => $request->discount,
                    'qty' => $request->qty,
                    'img' => $imageName,
                    'description' => $request->description,
                    'detail' => $request->detail,
                    'categoryclothing_id' => $request->category,
                    'collection' => $request->collection,
                    'status_product' => $request->status,
                ]);
            }
            // return $request;
            return redirect()->route("product.index")->with('alert', "ADD PRODUCT SUCCESS");
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
        $product = Product::find($id);
        $productCate = Categoryclothing::all();
        $productCollect =  Categorycollection::all();
        $status = Status::all();
        $collection = Categorycollection::all();
        return view("admin/product/edit", compact('product', 'productCate', 'productCollect', 'status', 'collection'));
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
        $product = Product::find($id);
        if(isset($_POST['btnUpdateProduct'])){
            $request->validate(
                [
                    'title' => "required|min:5|max:100",
                    'price' => "required",
                    'discount' => "required",
                    'qty' => "required",
                    'description' => "required|min:5|max:1000",
                    'detail' => "required|min:5",
                    'category' => "required",
                    'collection' => "required",
                    'status' => "required",
                    'img' => 'bail|required|image|mimes:jpg,jpeg,png,gif|max:50000',
                ],
                [
                    'image' => "The select file must be an image",
                    'mimes' => 'The picture file with incorrect format(e.g: ".jpg", ".jpeg", ".png", ".gif")',
                ]
            );
            if($request->hasFile("img")){
                $destination_path = 'public/images/product';
                $image = $request->file('img');
                $imageName = $image->getClientOriginalName();
                $image->storeAs($destination_path, $imageName);
                $product->name = $request->title;
                $product->price = $request->price;
                $product->discount = $request->discount;
                $product->qty = $request->qty;
                $product->img = $imageName;
                $product->description = $request->description;
                $product->detail = $request->detail;
                $product->categoryclothing_id = $request->category;
                $product->collection = $request->collection;
                $product->status_product = $request->status;
                $product->save();
            }
            return redirect()->route("product.index")->with('alert', "ADD PRODUCT SUCCESS");
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
        $product = Product::find($id);
        $product->delete();
        return back()->with('alert', "DELETE PRODUCT id = $id SUCCESS");
    }
}
