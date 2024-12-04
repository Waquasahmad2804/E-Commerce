<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserAuth
{
    public function handle($request, Closure $next)
    {
      
        if ($request->path=='home'&& $request->session()->has('user')) {
       
          
                return redirect()->route('home');
            
        }

        return $next($request);
    }
}

