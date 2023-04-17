<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //si l'utilisateur est un admin (auth()->user()->admin==1)
        if (auth()->user()->admin===1) {
            return $next($request);
        }
        else{
            abort(403);
        }
    }
}
