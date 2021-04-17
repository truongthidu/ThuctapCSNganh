<?php

namespace App\Http\Controllers;

use App\Categoryclothing;
use App\Categorycollection;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request, $next){
            $tempCollection = "";
            $checkProductUrl = Product::checkProductModule($tempCollection);
            $category = $request->input('category');
            if(empty($category)) session(['module_active' => $checkProductUrl]);
            else session(['module_active' => $category]);
            return $next($request);
        });
    }

    function show(Request $request){
        $indexCollection = 0;
        $category_clothing = Categoryclothing::all();
        $categoryCollection = Categorycollection::all();
        foreach($categoryCollection as $k => $v){
            $checkProductUrl = Product::checkProductUrl($v->collection);
            if($checkProductUrl){
                $tempCollection = $v->collection;
                $indexCollection = $k+1;
                $orderBy = $request->get('orderBy');
                if($orderBy){
                    switch($orderBy){
                        case 'priceHighToLow':
                            $product = Product::orderBy('price', 'desc'); break;
                        case 'priceLowToHigh':
                            $product = Product::orderBy('price', 'asc'); break;
                        case 'prodLatest':
                            $product = Product::latest(); break;
                        case 'prodIverseAlphaB':
                            $product = Product::orderBy('name', 'desc'); break;
                        default:
                            $product = Product::orderBy('name', 'asc'); break;
                    };
                    $product = $product->where('collection', 'LIKE', "$v->id")->paginate(9);
                }else{
                    $product = Product::where('collection', 'LIKE', "$v->id")->paginate(9);
                }

                $filterPriceProduct = $request->get('price');
                if($filterPriceProduct){
                    switch($filterPriceProduct){
                        case '1':
                            $product = Product::where('price', '<', '1000'); break;
                        case '2':
                            $product = Product::whereBetween('price', [1000, 2000]); break;
                        case '3':
                            $product = Product::whereBetween('price', [2000, 3000]); break;
                        case '4':
                            $product = Product::whereBetween('price', [3000, 4000]); break;
                        case '5':
                            $product = Product::whereBetween('price', [4000, 5000]); break;
                        case '6':
                            $product = Product::where('price', '>', '5000'); break;
                    };
                    $product = $product->where('collection', 'LIKE', "$v->id")->paginate(9);
                }
                if(empty($orderBy) & empty($filterPriceProduct)){
                    $product = Product::where('collection', 'LIKE', "$v->id")->paginate(9);
                }
                $checkNumber10 = Product::checkNumber10($product->total());
                return view("user/product/productCollection", compact('product', 'category_clothing', 'indexCollection', 'categoryCollection', 'checkNumber10', 'tempCollection'));
            }
        }
    }

    function search(Request $request){
        $keywordSearch = "";
        $category_clothing = Categoryclothing::all();
        $categoryCollection = Categorycollection::all();

        if($request->input('btnSerach')){
            $keywordSearch = $request->input('keywordSearch');
        }

        $category = $request->input('category');
        if(empty($category)){
            $emptyProduct = 'Không có sản phẩm nào cho từ khóa: <b><i>"'.$keywordSearch.'"</i></b>';
            $product = Product::where('name', 'LIKE', "%{$keywordSearch}%")->paginate(15);
            $checkNumber10 = Product::checkNumber10($product->total());
            return view('user/product/search', compact('product', 'category', 'category_clothing', 'keywordSearch', 'emptyProduct', 'checkNumber10'));
        }else{
            foreach($categoryCollection as $v){
                if($category == $v->collection){
                    $emptyProduct = "Không có sản phẩm nào cho từ khóa: <b><i>'".$keywordSearch."'</i></b> với Category: <b><i>'".$v->collection."'</i></b>";
                    $product = Product::where('name', 'LIKE', "%{$keywordSearch}%")->where('collection', $v->id)->paginate(15);
                    $checkNumber10 = Product::checkNumber10($product->total());
                    return view('user/product/search', compact('product', 'category', 'category_clothing', 'keywordSearch', 'emptyProduct', 'checkNumber10'));
                }
            }
        }
    }
}
