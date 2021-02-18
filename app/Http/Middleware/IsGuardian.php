<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IsGuardian
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() || !$request->user()->is_guardian) {
            return Redirect::route('login');
        }

        return $next($request);
    }
}
