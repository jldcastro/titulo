<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TiposController extends Controller
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

    //presenta el formulario para nuevo tipo equipo
    public function nuevo_tipo()
    {
        return view('formularios.mantenedores.tipos.nuevo_tipo');
    }

    public function lista_tipos()
    {
        $tipos= Tipo::paginate(10);
        return view('formularios.mantenedores.tipos.lista_tipos')->with("tipos", $tipos );
    }

    //Formulario para nueva marca equipo
    public function crear_tipo(Request $request)
    {
        $tipo= new Tipo;
        $tipo->nombre=$request->input("nombre");

        $resultado= $tipo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Tipo de equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_tipo($id)
    {
        //funcion para mostrar los datos de un estado
        $tipo=Tipo::find($id);
        $contador=count($tipo);
        if($contador>0){
            return view("formularios.mantenedores.tipos.editar_tipo")->with("tipo",$tipo);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El tipo no existe o fue borrado");
        }
    }

    public function actualizar_tipo(Request $request)
    {
        $idTipo = $request->input("id_tipo");
        $tipo = Tipo::find($idTipo);
        $tipo->nombre = $request->input("nombre");

        $resultado= $tipo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El tipo fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_tipo($id)
    {

        $tipo = Tipo::find($id);
        $resultado = $tipo->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El tipo del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
