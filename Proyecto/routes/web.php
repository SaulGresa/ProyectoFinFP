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


//Route::pattern('num', '[4-9]');

/*Route::get("noticias/{nombre?}" , function($nombre = "deportes"){
    return "<h2>Estoy en la noticia $nombre</h2>";
});*/

Route::get("about", "ControllerEmpresa@about");
Route::get("index", "ControllerEmpresa@index");
Route::get("contacta", "ControllerEmpresa@contacta");
//Route::post("editar","ProductosController@editar");
Route::get("noticias", "ControllerEmpresa@noticias");

