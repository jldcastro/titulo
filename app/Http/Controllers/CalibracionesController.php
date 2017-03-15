<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calibracion;
use App\User;
use App\Marca;
use App\Numero;
use App\Tipo;
use App\Cliente;
use App\Material;
use App\Condicion;
use App\Modelo;
use App\Unidad;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Carbon\Carbon;


class CalibracionesController extends Controller
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

    //presenta el formulario para nueva solicitud de cotización
    public function nueva_calibracion()
    {
        $materiales = Material::all();
        $marcas = Marca::all();
        //$modelos = Modelo::all();
        $tipos = Tipo::all();
        $unidades = Unidad::all();
        $condiciones = Condicion::all();
        $numero = \DB::table('numeros')->select('id')->first();
        $fecha_solicitud = Carbon::now();
        $fecha_solicitud = $fecha_solicitud->format('Y-m-d');
        $nombre_completo =Auth::User()->name. " " . Auth::User()->apellido_paterno;
        return view('formularios.f37.nueva_calibracion')->with("numero",$numero)->with("fecha_solicitud",$fecha_solicitud)->with("nombre_completo",$nombre_completo)->with("unidades",$unidades)->with("condiciones",$condiciones)->with("marcas",$marcas)->with("tipos",$tipos)->with("materiales",$materiales);
    }

    //presenta la lista y paginación de solicitudes de cotización
    public function lista_calibraciones()
    {
        $usuarios = User::all();
        $clientes = Cliente::all();
        $condiciones = Condicion::all();
        $modelos = Modelo::all();
        $calibraciones = Calibracion::paginate(10);
        return view('formularios.f37.lista_calibraciones')->with("calibraciones", $calibraciones)->with("usuarios", $usuarios)->with("clientes",$clientes)->with("condiciones",$condiciones)->with("modelos,$modelos");
    }

    //Formulario para nueva calibracion
    public function crear_calibracion(Request $request)
    {
        $calibracion= new Calibracion;
        $calibracion->idNumero =
        $calibracion->fecha_solicitud = Carbon::now()->toDateString();
        $calibracion->idUsuario= Auth::User()->id;
        $calibracion->idCliente=$request->input("id_cliente");
        $calibracion->comuna_servicio=$request->input("comuna_servicio");
        $calibracion->lugar_servicio=$request->input("lugar_servicio");

        $resultado= $calibracion->save();

        if($resultado){

            return view("mensajes.correcto")->with("mensaje","Solicitud de compra registrada exitósamente");
        }
        else
        {
            return view("mensajes.incorrecto")->with("mensaje","Hubo un error vuelva a intentarlo");
        }
    }
}
