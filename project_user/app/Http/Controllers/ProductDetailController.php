<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
    function show($id){
        $product = Product::find($id);
        return view("user/productDetail", compact('product'));
    }
}
