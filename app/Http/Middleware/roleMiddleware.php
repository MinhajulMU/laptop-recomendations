<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\Handler;
class roleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$roleName)
    {
        if(!$request->user()->hasRole($roleName)){
            return abort(403);
        }
        return $next($request);
    }
}
