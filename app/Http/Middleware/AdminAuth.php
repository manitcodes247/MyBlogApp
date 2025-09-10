<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next){
        // If admin_id is not in session => not logged in
        if(!$request->session()->has('admin_id')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
