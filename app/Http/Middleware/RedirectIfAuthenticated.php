<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(\Illuminate\Http\Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($request->user()->is_employee) {
                    return redirect(route('admin.index'));
                }
                if ($request->user()->is_guardian) {
                    return redirect(route('dashboard.index'));
                }
                return redirect(route('home'));
            }
        }

        return $next($request);
    }
}
