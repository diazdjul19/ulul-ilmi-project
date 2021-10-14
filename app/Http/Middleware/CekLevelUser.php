<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Alert;


class CekLevelUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$lavels)
    {
        $user = Auth::user();

        if (in_array($user->level,$lavels )) {

            if ($user->status == "active") {
                return $next($request);
            }else {
                \Session::flash('user_gagal_login', 'Mohon maaf, Status anda saat ini sedang tidak "Active".');
                return redirect('/');
            }
        }

        return redirect('/');
    }
}
