<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
use App\Marca;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModelosController extends Controller
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
    public function nuevo_modelo()
    {
        $marcas = Marca::all();
        return view('formularios.mantenedores.modelos.nuevo_modelo')->with("marcas",$marcas);
    }

    public function lista_modelos()
    {
        $marcas = Marca::all();
        $modelos= Modelo::paginate(10);
        return view('formularios.mantenedores.modelos.lista_modelos')->with("modelos", $modelos)->with("marcas",$marcas);
    }

    //Formulario para nueva marca equipo
    public function crear_modelo(Request $request)
    {
        $modelo= new Modelo;
        $modelo->nombre=$request->input("nombre");
        $modelo->idMarca=$request->input("id_marca");

        $resultado= $modelo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Modelo del equipo Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_modelo($id)
    {
        //funcion para mostrar los datos de un modelo
        $marcas = Marca::all();
        $modelo=Modelo::find($id);
        $contador=count($modelo);
        if($contador>0){
            return view("formularios.mantenedores.modelos.editar_modelo")->with("modelo",$modelo)->with("marcas",$marcas);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El modelo del equipo no existe o fue borrado");
        }
    }

    public function actualizar_modelo(Request $request)
    {
        $idModelo = $request->input("id_modelo");
        $modelo = Modelo::find($idModelo);
        $modelo->nombre = $request->input("nombre");
        $modelo->idMarca=$request->input("id_marca");

        $resultado= $modelo->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El modelo del equipo fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_modelo($id)
    {

        $modelo = Modelo::find($id);
        $resultado = $modelo->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El modelo del equipo fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
