<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <nav>
            <a href="http://localhost:8000/index">Inicio</a>
            <a href="http://localhost:8000/about">About</a>
            <a href="http://localhost:8000/contacta">Contacta</a>
            <a href="http://localhost:8000/noticias">Noticias</a>
        </nav>
        <h1>BIENVENIDOS A PROMANAGING</h1>
        @yield("contenido")
    </body>
</html>
