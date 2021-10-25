<?php

namespace App\Http\Middleware;

use Closure;

class samp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $samp)
    {
        echo"This is the ".$samp."<br>";
        return $next($request);
    }
}
