<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthorisationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();
        // is the user logged in?
        if ($user == null) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        // if they are logged in do they have the right role / are they a root user?
        if (!$user->role->name == $role) {
            if (!$user->role->name == "System Admin"){
                return response()->json(['error' => 'Unathorised.'], 403);
            }
        }

        return $next($request);
    }
}
