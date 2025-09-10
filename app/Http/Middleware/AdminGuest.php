<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminGuest
{
    public function handle(Request $request, Closure $next){
        // If admin_id exists in session => already logged in, redirect to dashboard
        if($request->session()->has('admin_id')) {
            return redirect()->route('articles.index');
        }

        return $next($request);
    }
}
