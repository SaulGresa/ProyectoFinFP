<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectosController extends Controller
{
    private $con;
    private $estado;
    
    public function conectar($h="172.17.0.2", $u="root", $p="root", $bd="proyecto"){    
        //Creamos un handler de la conexion con bd usando mysqli
        $con = new mysqli($h,$u,$p,$bd);
        
        //Verificamos si ha habido errores
        if($con->connect_errno===0){
            $this->estado = "<h1>Conectado!!!</h1>";
        }else{
            $this->estado = "<h2>No se ha podido conectar</h2>";
            $this->estado .= "<h3>Error numero  {$con->connect_errno} </h3>";
            $this->estado .= "<h3>Descripcion del error {$con->connect_error }</h3>";
        }
        $this->con=$con;
    }
    
    public function guardarProyecto(Request $datos){
        //dd($datos->all());
        $proyecto = new Proyecto();
        $proyecto->titulo = $datos->input('titulo');
        $proyecto->fecha = $datos->input('fecha');
        $proyecto->estado = $datos->input('estado');
        $proyecto->fase = $datos->input('fase') . $datos->input('sprint');
        $proyecto->ciclo = $datos->input('ciclo');
        $proyecto->save();
        return view("manage.proyecto");
    }
    
    public function borrarProyecto($i){
        $rtdo = $this->con->query($i);
        if ($rtdo===true)
            $this->estado .= "<h4>Se ha eliminado {$this->con->affected_rows} fila correctamente</h4>";
        else 
            $this->estado .= "<h4>Error al eliminar {$this->con->error}</h4>";
    }
    
    public function updateProyecto($i){
        $rtdo = $this->con->query($i);
        if ($rtdo===true)
            $this->estado .= "<h4>Se ha actualizado {$this->con->affected_rows} fila correctamente</h4>";
        else 
            $this->estado .= "<h4>Error al actualizar {$this->con->error}</h4>"; 
    }
    
    public function manejarProyecto(Request $datos=null, $user=null, $pass=null){
        if(isset($_POST['alta'])){
            $this->guardarProyecto($datos);
        }
        if(isset($_POST['baja'])){
            $i = "delete from usuarios
                where user = '$user'"; 
            $this->borrarProyecto($i);
        }
        if(isset($_POST['mod'])){
            $i = "update usuario
                set pass = '$pass'
                where nombre = '$nombre'";
             $this->updateProyecto($i);
        }
    }
}
