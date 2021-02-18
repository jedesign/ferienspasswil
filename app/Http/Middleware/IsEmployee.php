<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IsEmployee
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() || !$request->user()->is_employee) {
            return Redirect::route('login');
        }

        return $next($request);
    }
}
