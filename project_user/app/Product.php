<?php

namespace App;
use App\Categorycollection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table = "products";
    protected $fillable = [
        "id", "categoryclothing_id", "name", "price", "qty", "discount", "img", "description", 'detail', 'status_product',
    ];

    public static function checkProductModule($tempCollection){
        $categoryCollection = Categorycollection::all();
        foreach($categoryCollection as $v){
            if(url()->current() == url("user/product/collection/$v->collection")){
                $tempCollection = $v->collection;
                return $tempCollection;
            }
        }
    }

    public static function checkProductUrl($temp){
        if(url()->current() == url("user/product/collection/$temp")){
            return true;
        }else return false;
    }

    public static function checkNumber10($num){
        if($num >= 10) return $num;
        else return "0".$num;
    }
}
