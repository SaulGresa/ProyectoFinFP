<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model{
    private $CIF;
    private $sector;
    private $codigoPropuesta;
    
    public function getCIF() {
        return $this->CIF;
    }

    public function getSector() {
        return $this->sector;
    }

    public function getCodigoPropuesta() {
        return $this->codigoPropuesta;
    }

    public function setCIF($CIF) {
        $this->CIF = $CIF;
    }

    public function setSector($sector) {
        $this->sector = $sector;
    }

    public function setCodigoPropuesta($codigoPropuesta) {
        $this->codigoPropuesta = $codigoPropuesta;
    }


}
