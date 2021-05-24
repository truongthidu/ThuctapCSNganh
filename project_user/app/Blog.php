<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';

    protected $fillable = [
        'title_blog', 'img_blog', 'content_blog', 'status_blog', 'created_at', 'updated_at',
    ];
    
    function categoryblog(){
        return $this->belongsTo('App\Categoryblog');
    }
}
