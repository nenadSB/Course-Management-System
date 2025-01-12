<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated and has the required role
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request);
        }

        // If not, abort with a 403 error
        abort(403, 'Unauthorized action.');
    }
}