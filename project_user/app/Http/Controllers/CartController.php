<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show(){
        return view('user/cart');
    }

    function add($id){
        $product = Product::find($id);
        $addCart = Cart::add([
            'id' => $product->id, 
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1,
            'options' => [
                'categoryclothing_title' => $product->categoryclothing_title,
                'discount' => $product->discount, 
                'img' => $product->img,
            ],
        ]);
        $countCart = Cart::count();
        $alertAddCart = "<div class='CartNotification__Wrapper-sc-1egoil-0 fhQCQR'>
                    <a class='btn-close'><i class='fas fa-times'></i></a>
                    <p class='status'>
                        <svg stroke='currentColor' fill='currentColor' stroke-width='0' viewBox='0 0 512 512' height='1em' width='1em' xmlns='http://www.w3.org/2000/svg'><path d='M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z'></path></svg>Thêm vào giỏ hàng thành công!
                    </p>
                    <a class='btn-view-cart' href='http://localhost/project_websitebanhang/project_user/user/cart'>Xem giỏ hàng và thanh toán</a>
                </div>";
        $data = array([
            'addCart' => $addCart,
            'countCart' => $countCart,
            'alertAddCart' => $alertAddCart,
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
        ]);
        echo json_encode($data);
    }
}
