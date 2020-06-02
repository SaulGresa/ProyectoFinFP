<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    private $con;
    private $estado;
    
    public function altaUser(Request $datos){
        //dd($datos->all());
        $user = new Usuario();
        $user->nombre = $datos->input('nombre');
        $user->user = $datos->input('user');
        $user->pass = $datos->input('pass');
        $user->email = $datos->input('email');
        $user->rol = $datos->input('rol');
        $user->save();
        //$usuario = Usuario::create($datos->all());
        return view("funcionalidades.inicioSesion");
    }
    
    public function borrarUsuario($i){
        $rtdo = $this->con->query($i);
        if ($rtdo===true)
            $this->estado .= "<h4>Se ha eliminado {$this->con->affected_rows} fila correctamente</h4>";
        else 
            $this->estado .= "<h4>Error al eliminar {$this->con->error}</h4>";
    }
    
    public function updateUsuario($i){
        $rtdo = $this->con->query($i);
        if ($rtdo===true)
            $this->estado .= "<h4>Se ha actualizado {$this->con->affected_rows} fila correctamente</h4>";
        else 
            $this->estado .= "<h4>Error al actualizar {$this->con->error}</h4>"; 
    }
}
