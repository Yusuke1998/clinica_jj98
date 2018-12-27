<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::User()->rol == 'admin'){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
