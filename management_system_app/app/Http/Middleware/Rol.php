<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Comprueba que ha iniciado sesión
        if (Auth::check()) {
            //Comprueba si es admin
            if (Auth::User()->rol == '1') {
                return $next($request);
            } else {
                //Si no es administrador vuelve al login
                return redirect('/account');
            }
        } else {
            return redirect('/account');
        }
    }
}
