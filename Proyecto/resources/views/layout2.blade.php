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
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div class="header">
            <form action="" method="POST">
            @csrf
                <img id="logo" src="imagenes/ProManaging.png">
                <div class="botonesAcceso">
                    <a href="http://localhost:8000/index"><input type="button" name="sesion" value="Volver a Inicio"></a>
                </div>
            </form>
        </div>
        @yield("app")
    </body>
</html>