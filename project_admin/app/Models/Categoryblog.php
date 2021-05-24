<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoryblog extends Model
{
    //
    protected $table = 'category_blogs';
    
    protected $fillable = [
        'title_category_blog',
    ];

    function blog(){
        return $this->hasMany('App\Blog');
    }
}
