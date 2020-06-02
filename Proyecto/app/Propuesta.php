<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model{
    private $codigoPropuesta;
    private $titulo;
    private $descripcion;
    private $sector;
    
    public function getCodigoPropuesta() {
        return $this->codigoPropuesta;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getSector() {
        return $this->sector;
    }

    public function setCodigoPropuesta($codigoPropuesta) {
        $this->codigoPropuesta = $codigoPropuesta;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setSector($sector) {
        $this->sector = $sector;
    }


}
