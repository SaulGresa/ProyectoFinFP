<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model{
    private $codigoProyecto;
    private $titulo;
    private $fecha;
    private $estado;
    private $path;
    private $fase;
    private $ciclo;
    public $timestamps = false;
    
    function getCodigoProyecto() {
        return $this->codigoProyecto;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getEstado() {
        return $this->estado;
    }

    function getPath() {
        return $this->path;
    }

    function getFase() {
        return $this->fase;
    }

    function getCiclo() {
        return $this->ciclo;
    }

    function setCodigoProyecto($codigoProyecto) {
        $this->codigoProyecto = $codigoProyecto;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setFase($fase) {
        $this->fase = $fase;
    }

    function setCiclo($ciclo) {
        $this->ciclo = $ciclo;
    }


}
