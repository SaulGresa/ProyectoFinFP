<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model{
    private $codigoRecomendacion;
    private $descripcion;
    private $user;
    private $codigoPropuesta;
    
    public function getCodigoRecomendacion() {
        return $this->codigoRecomendacion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getUser() {
        return $this->user;
    }

    public function getCodigoPropuesta() {
        return $this->codigoPropuesta;
    }

    public function setCodigoRecomendacion($codigoRecomendacion) {
        $this->codigoRecomendacion = $codigoRecomendacion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setCodigoPropuesta($codigoPropuesta) {
        $this->codigoPropuesta = $codigoPropuesta;
    }


}
