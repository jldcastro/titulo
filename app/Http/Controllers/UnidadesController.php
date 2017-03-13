<?php

namespace App\Http\Controllers;

use App\Unidad;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UnidadesController extends Controller
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

    //presenta el formulario para nueva marca equipo
    public function nueva_unidad()
    {
        return view('formularios.mantenedores.unidades.nueva_unidad');
    }

    public function lista_unidades()
    {
        $unidades= Unidad::paginate(10);
        return view('formularios.mantenedores.unidades.lista_unidades')->with("unidades", $unidades);
    }

    //Formulario para nueva marca equipo
    public function crear_unidad(Request $request)
    {
        $unidad= new Unidad;
        $unidad->nombre=$request->input("nombre");

        $resultado= $unidad->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Unidad de peso Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_unidad($id)
    {
        //funcion para mostrar los datos de un modelo
        $unidad=Unidad::find($id);
        $contador=count($unidad);
        if($contador>0){
            return view("formularios.mantenedores.unidades.editar_unidad")->with("unidad",$unidad);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","La unidad de peso no existe o fue borrado");
        }
    }

    public function actualizar_unidad(Request $request)
    {
        $idUnidadC = $request->input("id_unidad");
        $unidad = Unidad::find($idUnidadC);
        $unidad->nombre = $request->input("nombre");

        $resultado= $unidad->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","La unidad de peso fue actualizada exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_unidad($id)
    {

        $unidad = Unidad::find($id);
        $resultado = $unidad->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "La unidad de pes fue eliminada exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
