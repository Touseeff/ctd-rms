<?php

// app/Http/Middleware/AuthMiddleWare.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  mixed  $roles
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (Auth::check() && Auth::user()->role_id !== $roles) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        return $next($request);
      
    }
}




   