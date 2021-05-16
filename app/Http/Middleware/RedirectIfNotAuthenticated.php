<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $isAuth = Auth::check();

        if ($isAuth) {
            return $next($request);
        }

        $uri = $request->path();

        if (str_contains($uri, 'client/mobile')) {
            return redirect('/client/mobile/login');
        } else if (str_contains($uri, 'admin/mobile')) {
            return redirect('/admin/mobile/login');
        } else {
            return redirect('/login');
        }
    }
}
