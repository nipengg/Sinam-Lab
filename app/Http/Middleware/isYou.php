<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsYou
{
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');
        if(Auth::user() && Auth::user()->id == $id)
        {
            return $next($request);
        }
        return redirect('/');
    }
}