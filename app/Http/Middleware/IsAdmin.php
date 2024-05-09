<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y si es administrador
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // Si el usuario no está autenticado o no es administrador, redirige a una página de acceso denegado
        abort(403, 'Acceso denegado');
    }
}
