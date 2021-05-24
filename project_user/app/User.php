<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'img', 'day', 'month', 'year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public static function convertEmail($result){
        $result_explode = explode("@", $result);
        $result = Str::of($result_explode[0])->limit(5, "*****");
        return $result."@".$result_explode[1];
    }

    public static function convertPhoneNumber($result){
        return $result = Str::of($result)->limit(0, "********").Str::substr($result, -2);
    }

    public static function checkIsset($user, $request_user){
        if(isset($request_user)) return $user = $request_user;
        else return $user = $user;
    }
}
