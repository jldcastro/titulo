<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaterialesController extends Controller
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
    public function nuevo_material()
    {
        return view('formularios.mantenedores.materiales.nuevo_material');
    }

    public function lista_materiales()
    {
        $materiales= Material::paginate(10);
        return view('formularios.mantenedores.materiales.lista_materiales')->with("materiales", $materiales);
    }

    //Formulario para nueva marca equipo
    public function crear_material(Request $request)
    {
        $material= new Material;
        $material->nombre=$request->input("nombre");

        $resultado= $material->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Material Masa Registrada Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_material($id)
    {
        //funcion para mostrar los datos de una marca
        $material=Material::find($id);
        $contador=count($material);
        if($contador>0){
            return view("formularios.mantenedores.materiales.editar_material")->with("material",$material);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El material de masa no existe o fue borrado");
        }
    }

    public function actualizar_material(Request $request)
    {
        $idMaterial=$request->input("id_material");
        $material=Material::find($idMaterial);
        $material->nombre=$request->input("nombre");

        $resultado= $material->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El material de masa fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function eliminar_material($id)
    {
        $material = Material::find($id);
        $resultado = $material->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El material de la masa fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
