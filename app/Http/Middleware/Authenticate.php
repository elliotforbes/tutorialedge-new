<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Log;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        Log::info("Authenticating Users...");
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                Log::info("Unauthorized ajax request");
                return response('Unauthorized.', 401);
            } else {
                Log::info("Else redirect to guest('login')");
                return redirect()->guest('/auth/github');
            }
        }
        if (Auth::user()->github_id == 3332224){
            Log::info("IT'S ME!!!");
            return $next($request);
        } else {
            Log::info("IT's not me...");
            return redirect()->guest('/');
        }
    }
}
