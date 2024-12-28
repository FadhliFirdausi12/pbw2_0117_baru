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
        \Log::info('Role Middleware Called. Required Role: ' . $role);
        \Log::info('User Role: ' . optional($request->user())->role);

        if (!$request->user() || $request->user()->role !== $role) {
            \Log::error('Unauthorized access. User role: ' . optional($request->user())->role);
            abort(403, 'Unauthorized');
        }
 
         return $next($request);
     }

}