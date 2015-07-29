<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class OldMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {
        if ($age == '100') {
            return redirect('home');
        }
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::info('OldMiddleware ## '.$request->age);
    }
}
