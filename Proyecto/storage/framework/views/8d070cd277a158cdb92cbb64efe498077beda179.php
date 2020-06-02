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
        <header>
            <img src="imagenes/logo.png" />
        </header>
        <nav>
            <a href="http://localhost:8000">Inicio</a>
            <a href="http://localhost:8000/about">About</a>
            <a href="http://localhost:8000/contacta">Contacta</a>
            <a href="http://localhost:8000/gestiona">Gestiona</a>
            <a href="http://localhost:8000/noticias">Noticias</a>
        </nav>
        <h1>BIENVENIDOS A MI EMPRESA</h1>
        <?php echo $__env->yieldContent("contenido"); ?>
    </body>
</html>
<?php /**PATH /home/saul/prueba1/resources/views/layout.blade.php ENDPATH**/ ?>