<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';

    protected $fillable = [
        'title_blog', 'img_blog', 'post_time',
    ];
    
    function categoryblog(){
        return $this->belongsTo('App\Categoryblog');
    }
}
