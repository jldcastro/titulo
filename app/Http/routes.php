<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Rutas para el login
Route::group(['middleware' => 'guest'], function() {
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
});

// Rutas para registrar
Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
});

// Rutas usuarios

    Route::get('nuevo_usuario', 'UsuariosController@nuevo_usuario');
    Route::post('crear_usuario', 'UsuariosController@crear_usuario');
    Route::get('lista_usuarios/{page?}', 'UsuariosController@lista_usuarios');
    Route::get('editar_usuario/{id}', 'UsuariosController@editar_usuario');
    Route::post('actualizar_usuario', 'UsuariosController@actualizar_usuario');
    Route::get('mostrar_usuario/{id}', 'UsuariosController@mostrar_usuario');
    Route::post('imagen_usuario', 'UsuariosController@imagen_usuario');
    Route::post('cambiar_contrasena', 'UsuariosController@cambiar_contrasena');
    Route::get('eliminar_usuario/{id}', 'UsuariosController@eliminar_usuario');
    Route::get('buscar_usuarios/{dato}', 'UsuariosController@buscar_usuarios');

// Rutas clientes

    Route::get('nuevo_cliente', 'ClientesController@nuevo_cliente');
    Route::post('crear_cliente', 'ClientesController@crear_cliente');
    Route::get('lista_clientes/{page?}', 'ClientesController@lista_clientes');
    Route::get('editar_cliente/{id}', 'ClientesController@editar_cliente');
    Route::post('actualizar_cliente', 'ClientesController@actualizar_cliente');
    Route::get('mostrar_cliente/{id}', 'ClientesController@mostrar_cliente');
    Route::get('eliminar_cliente/{id}', 'ClientesController@eliminar_cliente');
    Route::get('buscar_clientes/{dato}', 'ClientesController@buscar_clientes');


//Rutas mantenedores actividades

    Route::get('nueva_actividad', 'ActividadesController@nueva_actividad');
    Route::post('crear_actividad', 'ActividadesController@crear_actividad');
    Route::get('lista_actividades/{page?}', 'ActividadesController@lista_actividades');
    Route::get('editar_actividad/{id}', 'ActividadesController@editar_actividad');
    Route::post('actualizar_actividad', 'ActividadesController@actualizar_actividad');
    Route::get('eliminar_actividad/{id}', 'ActividadesController@eliminar_actividad');


//Rutas mantenedores nombres

    Route::get('nuevo_nombre', 'NombresController@nuevo_nombre');
    Route::post('crear_nombre', 'NombresController@crear_nombre');
    Route::get('lista_nombres/{page?}', 'NombresController@lista_nombres');
    Route::get('editar_nombre/{id}', 'NombresController@editar_nombre');
    Route::post('actualizar_nombre', 'NombresController@actualizar_nombre');
    Route::get('eliminar_nombre/{id}', 'NombresController@eliminar_nombre');


//Rutas mantenedores marcas

    Route::get('nueva_marca', 'MarcasController@nueva_marca');
    Route::post('crear_marca', 'MarcasController@crear_marca');
    Route::get('lista_marcas/{page?}', 'MarcasController@lista_marcas');
    Route::get('editar_marca/{id}', 'MarcasController@editar_marca');
    Route::post('actualizar_marca', 'MarcasController@actualizar_marca');
    Route::get('eliminar_marca/{id}', 'MarcasController@eliminar_marca');


//Rutas mantenedores ubicaciones

    Route::get('nueva_ubicacion', 'UbicacionesController@nueva_ubicacion');
    Route::post('crear_ubicacion', 'UbicacionesController@crear_ubicacion');
    Route::get('lista_ubicaciones/{page?}', 'UbicacionesController@lista_ubicaciones');
    Route::get('editar_ubicacion/{id}', 'UbicacionesController@editar_ubicacion');
    Route::post('actualizar_ubicacion', 'UbicacionesController@actualizar_ubicacion');
    Route::get('eliminar_ubicacion/{id}', 'UbicacionesController@eliminar_ubicacion');

//Rutas mantenedores condiciones

    Route::get('nueva_condicion', 'CondicionesController@nueva_condicion');
    Route::post('crear_condicion', 'CondicionesController@crear_condicion');
    Route::get('lista_condiciones/{page?}', 'CondicionesController@lista_condiciones');
    Route::get('editar_condicion/{id}', 'CondicionesController@editar_condicion');
    Route::post('actualizar_condicion', 'CondicionesController@actualizar_condicion');
    Route::get('eliminar_condicion/{id}', 'CondicionesController@eliminar_condicion');

//Rutas mantenedores modelos

    Route::get('nuevo_modelo', 'ModelosController@nuevo_modelo');
    Route::post('crear_modelo', 'ModelosController@crear_modelo');
    Route::get('lista_modelos/{page?}','ModelosController@lista_modelos');
    Route::get('editar_modelo/{id}', 'ModelosController@editar_modelo');
    Route::post('actualizar_modelo', 'ModelosController@actualizar_modelo');
    Route::get('eliminar_modelo/{id}', 'ModelosController@eliminar_modelo');

//Rutas mantenedores unidades

    Route::get('nueva_unidad', 'UnidadesController@nueva_unidad');
    Route::post('crear_unidad', 'UnidadesController@crear_unidad');
    Route::get('lista_unidades/{page?}','UnidadesController@lista_unidades');
    Route::get('editar_unidad/{id}', 'UnidadesController@editar_unidad');
    Route::post('actualizar_unidad', 'UnidadesController@actualizar_unidad');
    Route::get('eliminar_unidad/{id}', 'UnidadesController@eliminar_unidad');

//Rutas mantenedores tipos

    Route::get('nuevo_tipo', 'TiposController@nuevo_tipo');
    Route::post('crear_tipo', 'TiposController@crear_tipo');
    Route::get('lista_tipos/{page?}','TiposController@lista_tipos');
    Route::get('editar_tipo/{id}', 'TiposController@editar_tipo');
    Route::post('actualizar_tipo', 'TiposController@actualizar_tipo');
    Route::get('eliminar_tipo/{id}', 'TiposController@eliminar_tipo');

//Rutas mantenedores materiales

    Route::get('nuevo_material', 'MaterialesController@nuevo_material');
    Route::post('crear_material', 'MaterialesController@crear_material');
    Route::get('lista_materiales/{page?}','MaterialesController@lista_materiales');
    Route::get('editar_material/{id}', 'MaterialesController@editar_material');
    Route::post('actualizar_material', 'MaterialesController@actualizar_material');
    Route::get('eliminar_material/{id}', 'MaterialesController@eliminar_material');

//Rutas formulario f4

    Route::get('nuevo_equipo', 'EquiposController@nuevo_equipo');
    Route::post('crear_equipo', 'EquiposController@crear_equipo');
    Route::post('imagen_equipo', 'EquiposController@imagen_equipo');
    Route::get('lista_equipos/{page?}', 'EquiposController@lista_equipos');
    Route::get('editar_equipo/{id}', 'EquiposController@editar_equipo');
    Route::post('actualizar_equipo', 'EquiposController@actualizar_equipo');
    Route::get('mostrar_equipo/{id}', 'EquiposController@mostrar_equipo');
    Route::get('eliminar_equipo/{id}', 'EquiposController@eliminar_equipo');
    Route::get('descargar_f4/{id}','EquiposController@descargar_f4');
    Route::get('buscar_equipos/{dato}', 'EquiposController@buscar_equipos');


//Rutas formulario f5

    Route::get('listas_equipos/{page?}','EquiposController@listas_equipos');
    Route::get('descargar_f5/','EquiposController@descargar_f5');


//Rutas calibracion

    Route::get('lista_calibraciones/{page?}', 'CalibracionesController@lista_calibraciones');
    Route::get('nueva_calibracion','CalibracionesController@nueva_calibracion');
    Route::post('crear_calibracion', 'CalibracionesController@crear_calibracion');

