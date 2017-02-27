<?php namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class SolicitudController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //presenta el formulario para nueva solicitud de cotización
    public function nueva_solicitud()
    {
        return view('formularios.f37.nueva_solicitud');
    }

    //presenta la lista y paginación de solicitudes de cotización
    public function lista_solicitudes()
    {
        $solicitudes = Solicitud::paginate(10);
        return view('formularios.f37.lista_solicitudes')->with("solicitudes", $solicitudes);
    }

    //Formulario para nuevo usuario
    public function crear_usuario(Request $request)
    {
        $equipo= new Solicitud;
        $equipo->idNombre = $request->input("id_nombre");
        $equipo->idMarca = $request->input("id_marca");
        $equipo->nserie= $request->input("nserie");
        $equipo->cod_interno=$request->input("cod_interno");
        $equipo->capacidad=$request->input("capacidad");
        $equipo->clase_oiml=$request->input("clase_oiml");
        $equipo->error_max=$request->input("error_max");
        $equipo->idUbicacion = $request->input("id_ubicacion");
        $equipo->fcompra=$request->input("fcompra");
        $equipo->norden_compra=$request->input("norden_compra");
        $equipo->proveedor=$request->input("proveedor");
        $equipo->intervalo_mantenimiento=$request->input("intervalo_mantenimiento");
        $equipo->fecha_mantenimiento=$request->input("fecha_mantenimiento");
        $equipo->avisar=$request->input("avisar");
        $equipo->pauta_mantencion=$request->input("pauta_mantencion");
        $equipo->intervalo_calibracion=$request->input("intervalo_calibracion");
        $equipo->intervalo_verificacion=$request->input("intervalo_verificacion");
        $equipo->criterio_aceptacion=$request->input("criterio_aceptacion");
        $equipo->observaciones=$request->input("observaciones");
        $equipo->idActividad=$request->input("id_actividad");
        $equipo->f_realizacion=$request->input("f_realizacion");
        $equipo->f_proxima=$request->input("f_proxima");
        $equipo->realizado_por=$request->input("realizado_por");
        $equipo->ncertificado=$request->input("ncertificado");
        $equipo->observacion=$request->input("observacion");

        $resultado= $equipo->save();
        if ($resultado) {

            return view("mensajes.correcto")->with("mensaje", "Usuario Registrado Exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }
    }

    public function editar_usuario($id)
    {
        //funcion para mostrar los datos de un usuario
        $usuario = User::find($id);
        $contador = count($usuario);
        if ($contador > 0) {
            return view("formularios.usuarios.editar_usuario")->with("usuario", $usuario);
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "El usuario no existe o fue borrado");
        }
    }

    public function actualizar_usuario(Request $request)
    {

        $data = $request::all();
        $idUsuario = $data["id_usuario"];
        $usuario = User::find($idUsuario);
        $usuario->name = $data["name"];
        $usuario->email = $data["email"];
        $usuario->apellido_paterno = $data["apellido_paterno"];
        $usuario->apellido_materno = $data["apellido_materno"];

        $resultado = $usuario->save();

        if ($resultado) {

            return view("mensajes.correcto")->with("mensaje", "Los datos del usuario fueron actualizados exitósamente");
        } else {

            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");

        }
    }

    public function mostrar_usuario($id)
    {
        //funcion para mostrar los datos de un usuario
        $usuario = User::find($id);
        $contador = count($usuario);
        if ($contador > 0) {
            return view("formularios.usuarios.mostrar_usuario")->with("usuario", $usuario);
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "El usuario no existe o fue borrado");
        }
    }

    public function eliminar_usuario($id)
    {

        $usuario = User::find($id);
        $resultado = $usuario->delete();

        if ($resultado) {
            return view("mensajes.correcto")->with("mensaje", "Usuario eliminado exitósamente");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Hubo un error vuelva a intentarlo");
        }


    }

    public function imagen_usuario(Request $request)
    {

        $id = $request::input('usuario_foto');
        $archivo = $request::file('archivo');
        $input = array('image' => $archivo);
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:2000');
        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails()) {
            return view("mensajes.incorrecto")->with("mensaje", "El archivo no es una imagen válida");
        } else {

            $nombre_original = $archivo->getClientOriginalName();
            $extension = $archivo->getClientOriginalExtension();
            $nuevo_nombre = "usuario-" . $id . "." . $extension;
            $r1 = Storage::disk('fotousuarios')->put($nuevo_nombre, \File::get($archivo));
            $ruta = "imagenes/usuarios/" . $nuevo_nombre;

            if ($r1) {

                $usuario = User::find($id);
                $usuario->foto = $ruta;
                $r2 = $usuario->save();
                return view("mensajes.correcto")->with("mensaje", "Imagen de perfil agregada correctamente");
            } else {


            }
        }
    }

    public function cambiar_contrasena(Request $request)
    {

        $id = $request->input("usuario_contrasena");
        $email = $request->input("email_usuario");
        $password = $request->input("password_usuario");
        $usuario = User::find($id);
        $usuario->email = $email;
        $usuario->password = bcrypt($password);
        $r = $usuario->save();

        if ($r) {
            return view("mensajes.correcto")->with("mensaje", "La contraseña fue actualizada");
        } else {
            return view("mensajes.incorrecto")->with("mensaje", "Error al actualizar la contraseña");
        }
    }

    public function buscar_usuarios($dato="")
    {

        $usuarios= User::Busqueda($dato)->paginate(10);
        return view('formularios.usuarios.lista_usuarios')
            ->with("usuarios", $usuarios );
    }
}