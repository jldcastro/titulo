<?php

namespace App\Http\Middleware;

use Closure;

class VendedorMiddleware
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
        if($usuario_actual->tipo_usuario!='vendedor'){
            return view("mensajes.incorrecto")->with("mensaje","Esta seccion es solo visible para el usuario vendedor <br/> usted aun no ha sido asignado como usuario vendedor , consulte al administrador del sistema");
        }
        return $next($request);
    }
}
