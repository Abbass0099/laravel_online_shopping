<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard= 'seller')
    {
        if(!Auth::guard($guard)->check()){
            session()->flash('error-login', 'Please login first');
            return redirect("/");
        }
        
        return $next($request);
    }
}
