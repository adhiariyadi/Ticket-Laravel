<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->level == "Penumpang") {
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}
