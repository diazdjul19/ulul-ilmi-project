<?php

namespace App\Http\Middleware;

use Closure;

class BacktoallDashbaord
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
        
        if (\Session::has('creator')) {
            return redirect(route('home-creator'));
        }

        // JIKA INGIN MENAMBAHKAN SESSION BARU BISA DISINI

        return $next($request);
    }
}
