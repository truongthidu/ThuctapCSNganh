<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/", "LandingpageController@show");
Route::get("user/introduce", "IntroduceController@show");
Route::get("user/blog", "BlogController@show");
Route::get("user/contact", "ContactController@show");
Route::get("user/blogdetails/{id}", "BlogDetailsController@show");
Route::get("user/product/collection/{nameCollection}", "ProductController@show");
Route::get("user/product/search", "ProductController@search");
// Route::get("user/product/productOrderBy", "ProductController@productOrderBy");
Route::get("user/productDetail/{id}", "ProductDetailController@show");

// ===========================Information User============================== //
Route::resource('user/info', "UserInfoController");

Route::middleware('auth')->group(function () {
    // ===========================Shopping Cart============================== //
    Route::get("user/cart", "CartController@show");
    Route::get("user/cart/add/{id}", "CartController@add")->name('cart.add'); //muốn nhận id từ bên "view" thì tạo name() 
                                                                              //để bên view sử dụng route và gửi "id" được
    Route::get("user/cart/remove/{rowId}", "CartController@remove")->name('cart.remove');
    Route::get("user/cart/destroy", "CartController@destroy");
    Route::post("user/cart/update", "CartController@update")->name('cart.update');
});
