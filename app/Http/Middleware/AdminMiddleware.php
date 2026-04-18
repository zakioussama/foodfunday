<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
{
    if (!Auth::check()) {
        abort(403, 'Unauthorized: not logged in');
    }
    
    $userRole = Auth::user()->role;
    // Debug the role
    // You can log it or just dd() it
    // dd($userRole);

    if ($userRole === 'admin') {
        return $next($request);
    }
    abort(403, 'Unauthorized: role is ' . $userRole);
}

}
