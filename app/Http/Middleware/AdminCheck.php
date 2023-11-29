<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    public function handle(Request $request, Closure $next)
    {
       //return $request->session()->get('loginId');
        if($request->session()->get('loginId')){
            return $next($request);

        }
       
        return redirect()->route('login');
    }
}
