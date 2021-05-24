<?php

namespace App\Http\Controllers;

use App\Categoryclothing;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
    function show(){
        return view('user/cart');
    }

    function add($id){
        $product = Product::find($id);
        $prodCateAll = Categoryclothing::all();
        $cartCotent = Cart::content();
        $qtyTotal = $product->qty;
        $qtyUser = $_GET['qty'];
        $prodCate = "";
        $showQtyErr = "";
        $cart = array([
            'id' => $product->id, 
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $qtyUser,
            'options' => [
                'categoryclothing_id' => $prodCate,
                'discount' => $product->discount, 
                'img' => $product->img,
            ],
        ]);
        $qtyCart = 0;
        foreach($prodCateAll as $item){
            if($item->id == $product->categoryclothing_id){
                $prodCate = $item->title_category_clothing;
            }
        }
        if($qtyUser < $qtyTotal || $qtyUser == $qtyTotal ){
            if(Cart::count()>0){
                foreach($cartCotent as $item){
                    if($item->qty > $qtyTotal) $temp=0;
                    else $temp = $qtyTotal-$item->qty;
                    if($item->id == $product->id) $qtyCart = $item->qty;
                }
                if($qtyUser + $qtyCart > $qtyTotal) {$showQtyErr = "Remaining quantity to be purchased: ".$temp;}
                else{
                    Cart::add($cart);
                }
            }
            else{
                Cart::add($cart);
            }
        }
        else {$showQtyErr = "The maximum allowed quantity is: ".$qtyTotal;}
        $countCart = Cart::count();
        $data = array([
            'addCart' => $qtyCart,
            'countCart' => $countCart,
            'prodCate' => $prodCate,
            'showQtyErr' => $showQtyErr,
        ]);
        echo json_encode($data);
    }

    function remove($rowId){
        Cart::remove($rowId);
        $countCart = Cart::count();
        echo json_encode($countCart);
    }

    function destroy(){
        Cart::destroy();
        return back();
    }

    function update(){
        $id = $_POST['id'];
        $rowId = $_POST['rowId'];
        $qty = $_POST['qty'];
        Cart::update($rowId, $qty);
        $product = Product::find($id);
        $price_total = $product->price*$qty;
        $total = Cart::total('0', '', '.');
        $tax = Cart::tax('0', '', '.');
        $subTotal = Cart::subTotal('0', '', '.');
        $countCart = Cart::count();
        $data = array([
            'countCart' => $countCart,
            'price_total' => number_format($price_total, '0', '', '.'),
            'total' => $total,
            'tax' => $tax,
            'subTotal' => $subTotal,
            'total' => $total,
        ]);
        echo json_encode($data);
    }
}
