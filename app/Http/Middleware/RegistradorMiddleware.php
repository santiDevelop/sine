<?php

namespace App\Http\Middleware;

use Closure;

class RegistradorMiddleware
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
        if(!auth()->check())
            return redirect('login');
        if ((auth()->user()->typeuser==3 || auth()->user()->typeuser==4))
            return redirect('home')->with('notification','No esta Autorizado para entrar en este menu');
        return $next($request);
    }
}
