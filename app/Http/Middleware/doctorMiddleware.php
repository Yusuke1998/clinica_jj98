<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class doctorMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::User()->rol == 'doctor' || Auth::User()->rol == 'admin'){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
