<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoryclothing extends Model
{
    //
    protected $table = 'category_clothings';

    function men(){
        return $this->hasMany('App\Men');
    }
    function women(){
        return $this->hasMany('App\Women');
    }
    function child(){
        return $this->hasMany('App\Child');
    }
}
