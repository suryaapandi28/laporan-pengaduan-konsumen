<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$is_admins)
    {
        // if(!auth()->check() || !auth()->user()->is_admin === '1' && !auth()->user()->is_admin === '3'){
        //     abort(403);
        // }

        // if(is_array($request->user()->is_admin)){

        //     return $next($request);
        // }
        // return redirect('/login');
        abort(403);

    }
}
