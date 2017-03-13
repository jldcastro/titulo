<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condicion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CondicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //presenta el formulario para nueva condicion equipo
    public function nueva_condicion()
    {
        return view('formularios.mantenedores.condiciones.nueva_condicion');
    }

    public function lista_condiciones()
    {
        $condiciones= Condicion::paginate(10);
        return view('formularios.mantenedores.condiciones.lista_condiciones')->with("condiciones", $condiciones );
    }

    //Formulario para nueva condicion equipo
    public function crear_condicion(Request $request)
    {
        $condicion= new Condicion;
        $condicion->nombre=$request->input("nombre");

        $resultado= $condicion->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Condición del equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_condicion($id)
    {
        //funcion para mostrar los datos de una condicion de equipo
        $condicion=Condicion::find($id);
        $contador=count($condicion);
        if($contador>0){
            return view("formularios.mantenedores.condiciones.editar_condicion")->with("condicion",$condicion);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","La condicion del equipo no existe o fue borrado");
        }
    }

    public function actualizar_condicion(Request $request)
    {
        $idCondicion = $request->input("id_condicion");
        $condicion = Condicion::find($idCondicion);
        $condicion->nombre = $request->input("nombre");

        $resultado= $condicion->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","La condición del equipo fue actualizada exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_condicion($id)
    {

        $condicion = Condicion::find($id);
        $resultado = $condicion->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "La condición del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
