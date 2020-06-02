<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmpresa extends Controller
{
     
    public function index(){
        return view("index");
    }
    /*
    public function about(){
        return view("empresa.about");
    }
    
    public function contacta(){
        return view("empresa.contacta");
    }
    
    public function gestiona(){
        return view("empresa.gestiona");
    }
    */
    
    public function registro(){
        return view("funcionalidades.registro");
    }
    
    public function alumno(){
        return view("roles.alumno");
    }
    
    public function profe(){
        return view("roles.profesor");
    }
    
    public function admin(){
        return view("roles.admin");
    }
    
    public function propuesta(){
        return view("manage.propuesta");
    }
    
    public function proyecto(){
        return view("manage.proyecto");
    }
    
    public function proyectoBD(){
        return view("visualizacion.proyectosBD");
    }
    
//    public function redir(Request $datos){
//        if ($datos->get('rol') == "Administrador"){
//            return view("roles.admin");
//        }else if ($datos->get('rol') == "Profesor"){
//            return view("roles.profesor");
//        }else{
//            return view("roles.alumno");
//        }   
//    }

    protected function downloadFile($src){
        if(is_file($src)){
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        }else{
            return false;
        }
    }
    
    public function download(){
        if(!$this->downloadFile(app_path()."/files/rubricaProfes.xlsx")){
            return redirect()->back();
        }
    }
}
