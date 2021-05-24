<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!Auth::user() || Auth::user()->role->role != $role){
            $alert = "For Admin only, people with other permissions are not allowed to access this page";
            if(isset($alert))
                Auth::logout();
                return redirect()->route("login")->with("alert", $alert);
        }
        return $next($request);
    }
}
