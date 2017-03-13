<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
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

    //presenta el formulario para nuevo usuario
    public function nuevo_cliente()
    {
        return view('formularios.clientes.nuevo_cliente');
    }

    //presenta la lista y paginación de usuarios
    public function lista_clientes()
    {
        $clientes = Cliente::paginate(10);
        return view('formularios.clientes.lista_clientes')->with("clientes", $clientes);
    }

    //Formulario para nuevo cliente
    public function crear_cliente(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->input("nombre");
        $cliente->zona = $request->input("zona");
        $cliente->region = $request->input("region");
        $cliente->comuna = $request->input("comuna");
        $cliente->ciudad = $request->input("ciudad");
        $cliente->direccion_ubicacion = $request->input("direccion_ubicacion");

        $resultado = $cliente->save();

        if ($resultado) {

            return view("mensajes.correcto")->with("mensaje", "Cliente Registrado Exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }

    //funcion para mostrar los datos de un cliente
    public function editar_cliente($id)
    {
        $cliente = Cliente::find($id);
        $contador = count($cliente);
        if ($contador > 0) {
            return view("formularios.clientes.editar_cliente")->with("cliente", $cliente);
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "El cliente no existe o fue borrado");
        }
    }

    public function actualizar_cliente(Request $request)
    {
        $idCliente = $request->input("id_cliente");
        $cliente = Cliente::find($idCliente);
        $cliente->nombre = $request->input("nombre");
        $cliente->zona = $request->input("zona");
        $cliente->region = $request->input("region");
        $cliente->comuna = $request->input("comuna");
        $cliente->ciudad = $request->input("ciudad");
        $cliente->direccion_ubicacion = $request->input("direccion_ubicacion");

        $resultado = $cliente->save();

        if ($resultado) {

            return view("mensajes.correcto")->with("mensaje", "Los datos del cliente fueron actualizados exitósamente");
        } else {

            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");

        }
    }

    public function mostrar_cliente($id)
    {
        //funcion para mostrar los datos de un cliente
        $cliente = Cliente::find($id);
        $contador = count($cliente);
        if ($contador > 0) {
            return view("formularios.clientes.mostrar_cliente")->with("cliente", $cliente);
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "El cliente no existe o fue borrado");
        }
    }

    public function eliminar_cliente($id)
    {
        $cliente = Cliente::find($id);
        $resultado = $cliente->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "Cliente eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }

    public function buscar_clientes($dato="")
    {

        $clientes= Cliente::Busqueda($dato)->paginate(10);
        return view('formularios.clientes.lista_clientes')
            ->with("clientes", $clientes );
    }
}
