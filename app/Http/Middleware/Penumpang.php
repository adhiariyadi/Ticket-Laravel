<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Penumpang
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
        if ($request->user()->level == "Admin") {
            return redirect('/home');
        } else if ($request->user()->level == "Petugas") {
            return redirect('/petugas');
        } else {
            return $next($request);
        }
    }
}
