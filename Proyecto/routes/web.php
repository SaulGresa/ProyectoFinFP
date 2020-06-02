<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('proyecto', function () {
    return view('index');
});

Route::get("index", "ControllerEmpresa@index");
Route::get("sesion", "Auth\LoginController@sesion");
Route::post("sesion", "Auth\LoginController@postLogin");
Route::get("registro", "ControllerEmpresa@registro");
Route::post("registro", "UsuariosController@altaUser");
Route::get("alumno", "ControllerEmpresa@alumno");
Route::get("profesor", "ControllerEmpresa@profe");
Route::get("profesor/download", "ControllerEmpresa@download");
Route::get("administrador", "ControllerEmpresa@admin");
Route::get("propuesta", "ControllerEmpresa@propuesta");
Route::get("proyecto", "ControllerEmpresa@proyecto");
Route::post("proyecto", "ProyectosController@guardarProyecto");
Route::get("proyectoBD", "ControllerEmpresa@proyectoBD");


