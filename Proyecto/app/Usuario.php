<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    private $nombre;
    private $user;
    private $pass;
    private $email;
    private $rol;
    //protected $fillable = ['nombre','user','pass','email','rol'];
    public $timestamps = false;

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }


}
