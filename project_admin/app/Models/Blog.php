<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    // public $timestamps = false;

    protected $fillable = [
        'title_blog', 'img_blog', 'post_time', 'content_blog', 'categoryblog_id', 'status_blog',
    ];
    
    function categoryblog(){
        return $this->belongsTo('App\Categoryblog');
    }
}
