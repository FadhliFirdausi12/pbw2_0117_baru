<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */

     public function handle(Request $request, Closure $next, $role)
     {
        dd('RoleMiddleware called'); 

         if (Auth::check() && Auth::user()->role == $role) {
             return $next($request);
         }
 
         return redirect()->route('home')->with('error', 'You do not have access to this page.');
     }
}
