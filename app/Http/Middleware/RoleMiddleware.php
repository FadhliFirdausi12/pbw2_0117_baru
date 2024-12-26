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
         // Cek apakah user punya role yang sesuai
         if (!$request->user() || !$request->user()->hasRole($role)) {
             abort(403, 'Unauthorized');
         }
 
         return $next($request);
     }
 }