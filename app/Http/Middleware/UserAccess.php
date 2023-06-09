<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType1 = null)
    {
        if (Auth::check()) {
            if (Auth::user()->role == $userType1) {
                return $next($request);
            } else {
                return redirect('/login')->with('message', 'Maaf, Anda tidak memiliki akses ke halaman ini');
            }
        } else {
            return redirect('/login')->with('message', 'Anda belum login! Silahkan login dulu.');
        }
        return $next($request);
    }
}