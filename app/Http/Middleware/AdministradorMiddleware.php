<?php

namespace App\Http\Middleware;

use Closure;

class AdministradorMiddleware
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
        $usuario_actual=\Auth::user();
        if($usuario_actual->tipo_usuario!='administrador'){
            return view("mensajes.incorrecto")->with("mensaje","No tiene permisos de usuario para esta sección");
        }
        return $next($request);
    }
}
