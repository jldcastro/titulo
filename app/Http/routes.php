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
Route::group(['middleware' => 'usuarioAdministrador'], function(){
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
});

//Rutas mantenedores actividades
Route::group(['middleware' => 'usuarioAdministrador'], function(){
    Route::get('nueva_actividad', 'ActividadesController@nueva_actividad');
    Route::post('crear_actividad', 'ActividadesController@crear_actividad');
    Route::get('lista_actividades/{page?}', 'ActividadesController@lista_actividades');
    Route::get('editar_actividad/{id}', 'ActividadesController@editar_actividad');
    Route::post('actualizar_actividad', 'ActividadesController@actualizar_actividad');
    Route::get('eliminar_actividad/{id}', 'ActividadesController@eliminar_actividad');
});

//Rutas mantenedores nombres
Route::group(['middleware' => 'usuarioAdministrador'], function(){
    Route::get('nuevo_nombre', 'NombresController@nuevo_nombre');
    Route::post('crear_nombre', 'NombresController@crear_nombre');
    Route::get('lista_nombres/{page?}', 'NombresController@lista_nombres');
    Route::get('editar_nombre/{id}', 'NombresController@editar_nombre');
    Route::post('actualizar_nombre', 'NombresController@actualizar_nombre');
    Route::get('eliminar_nombre/{id}', 'NombresController@eliminar_nombre');
});

//Rutas mantenedores marcas
Route::group(['middleware' => 'usuarioAdministrador'], function(){
    Route::get('nueva_marca', 'MarcasController@nueva_marca');
    Route::post('crear_marca', 'MarcasController@crear_marca');
    Route::get('lista_marcas/{page?}', 'MarcasController@lista_marcas');
    Route::get('editar_marca/{id}', 'MarcasController@editar_marca');
    Route::post('actualizar_marca', 'MarcasController@actualizar_marca');
    Route::get('eliminar_marca/{id}', 'MarcasController@eliminar_marca');
});

//Rutas mantenedores ubicaciones
Route::group(['middleware' => 'usuarioAdministrador'], function(){
    Route::get('nueva_ubicacion', 'UbicacionesController@nueva_ubicacion');
    Route::post('crear_ubicacion', 'UbicacionesController@crear_ubicacion');
    Route::get('lista_ubicaciones/{page?}', 'UbicacionesController@lista_ubicaciones');
    Route::get('editar_ubicacion/{id}', 'UbicacionesController@editar_ubicacion');
    Route::post('actualizar_ubicacion', 'UbicacionesController@actualizar_ubicacion');
    Route::get('eliminar_ubicacion/{id}', 'UbicacionesController@eliminar_ubicacion');
});

//Rutas formulario f4
Route::group(['middleware' => 'usuarioAdministrador'], function(){
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
});

//Rutas formulario f5
Route::group(['middleware' => 'usuarioAdministrador'], function(){
    Route::get('listas_equipos/{page?}','EquiposController@listas_equipos');
    Route::get('descargar_f5/','EquiposController@descargar_f5');
});

//Rutas cotización
Route::group(['middleware' => 'usuarioVendedor'], function(){
    Route::get('lista_solicitudes/{page?}', 'SolicitudController@lista_solicitudes');
    Route::get('nueva_solicitud','SolicitudController@nueva_solicitud');
    Route::post('crear_solicitud', 'SolicitudController@crear_equipo');
});
