<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto as Producto;
//use Illuminate\Support\Facades\Request;

class ProductosController extends Controller
{
    //
    public function index(){
        //$productos = Producto::all();
        //return view("empresa/gestiona", ['nombre' => 'Saul', 'productos'=>$productos]);
        
        $tablas = "";
        return view ("empresa.gestiona", compact("tabla"));
    }
    
    public function editar(Request $datos){
        $cod = $datos->cod;
        $producto = Producto::where('cod', $cod)->first();
        
        return view ("tienda.editar", compact("producto"));
    }
}
