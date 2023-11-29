<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('user')){
            return $next($request);
        }
        return redirect()->route('login');
    }
}
