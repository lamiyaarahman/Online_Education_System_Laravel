<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeacherCheck
{
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('user')){
            return $next($request);
        }
        return redirect()->route('login');
    }
}
