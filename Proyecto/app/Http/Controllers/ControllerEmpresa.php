<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmpresa extends Controller
{
    //
     
    public function index(){
        return view("index");
    }
    
    public function about(){
        return view("empresa.about");
    }
    
    public function contacta(){
        return view("empresa.contacta");
    }
    
    public function gestiona(){
        return view("empresa.gestiona");
    }
    
    public function noticias(){
        return view("noticias");
    }
    
    
}
