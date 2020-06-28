<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class kontrolYetki
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->yetki == '1')
            return $next($request);

        return redirect()->route('home');
    }
}