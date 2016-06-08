<?php

namespace App\Http\Middleware;

use Closure;

use Symfony\Component\HttpFoundation\Cookie;

class IsLog
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
        if(!$request->hasCookie('user'))
        {
            return redirect('/');
        }

        return $next($request);

    }
}
