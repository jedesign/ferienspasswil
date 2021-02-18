<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EnsureEmailNotVerified
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() ||
            ($request->user() instanceof MustVerifyEmail && $request->user()->hasVerifiedEmail())
        ) {
            return $request->expectsJson()
                ? abort(403, 'Your email address is already verified.')
                : Redirect::route('login');
        }

        return $next($request);
    }
}
