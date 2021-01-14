<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Traveller
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
        //jika traveller di redirect berikut
        if (Auth::user()->role == 'traveler') {
            return $next($request);
          }
        //jika bukan traveller maka dialihkan kesihi
        return redirect('/TourGuide');
    }
}
