<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckKasir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check('kasir')) {
            if (Auth()->user()->role == 'kasir') {
                return $next($request);
            } else if (Auth()->user()->role == 'admin') {
                return redirect('admin');
            } else {
                return redirect('/')->with('error','Kamu belum login');
            }
        }
        return redirect('/')->with('error','Kamu belum login');
    }
}