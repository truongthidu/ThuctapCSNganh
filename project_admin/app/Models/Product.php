<?php

namespace App\Models;
use App\Categorycollection;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    protected $fillable = ["name", "categoryclothing_id", "descriptuon", "detail", "price", "qty", "discount", "img", "collection", "created_at", "deleted_at"];

    use Notifiable;
    use SoftDeletes;
    //

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
