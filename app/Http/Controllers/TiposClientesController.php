<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TiposClientesController extends Controller
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
    public function nuevo_tipocliente()
    {
        return view('formularios.mantenedores.tipos_clientes.nuevo_tipocliente');
    }

    public function lista_tiposclientes()
    {
        $tipos_clientes= TipoCliente::paginate(10);
        return view('formularios.mantenedores.tipos_clientes.lista_tiposclientes')->with("tipos_clientes", $tipos_clientes);
    }

    //Formulario para nueva marca equipo
    public function crear_tipocliente(Request $request)
    {
        $tipo_cliente= new TipoCliente;
        $tipo_cliente->nombre=$request->input("nombre");

        $resultado= $tipo_cliente->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Tipo de cliente Registrado Exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_tipocliente($id)
    {
        //funcion para mostrar los datos de un estado
        $tipo_cliente=TipoCliente::find($id);
        $contador=count($tipo_cliente);
        if($contador>0){
            return view("formularios.mantenedores.tipos_clientes.editar_tipocliente")->with("tipo_cliente",$tipo_cliente);
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","El tipo de cliente no existe o fue borrado");
        }
    }

    public function actualizar_tipocliente(Request $request)
    {
        $idTipoCliente = $request->input("id_tipocliente");
        $tipo_cliente = TipoCliente::find($idTipoCliente);
        $tipo_cliente->nombre = $request->input("nombre");

        $resultado= $tipo_cliente->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","El tipo de cliente fue actualizado exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");

        }
    }

    public function eliminar_tipocliente($id)
    {

        $tipo_cliente = TipoCliente::find($id);
        $resultado = $tipo_cliente->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "El tipo de cliente fue eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }
}
