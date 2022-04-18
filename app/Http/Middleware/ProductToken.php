<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    /**
     * NOTE: We need to register the middleware into the file ../Kernel.php
     */
    public function handle(Request $request, Closure $next)
    {
        /**
         * Middlewares are used to do something before the controller
         */
        if(!$request->has('token') || $request->token != '1234'){
            return redirect(route('no_token'));
        }
        return $next($request);
    }
}
