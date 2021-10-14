<?php

namespace App\Http\Middleware;

use Closure;

class FirewallDbCreator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!\Session::has('creator')) {
            return redirect(route('logreg-creator'));
        }
        return $next($request);
    }
}
