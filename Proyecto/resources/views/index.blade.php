@extends ("layout")
@section ("contenido")
<div class="header">
    <form action="" method="POST">
        @csrf
        <img id="logo" src="imagenes/ProManaging.png">
        <div class="botonesAcceso">
        <a href="http://localhost:8000/sesion"><input type="button" name="sesion" value="Iniciar sesión"></a>
        <a href="http://localhost:8000/registro"><input type="button" name="registro" value="Registrarse"></a> 
        </div>
    </form>
</div>
<div class="messages">
    <h1>PROPUESTAS DISPONIBLES</h1>
</div>
{{--Recorro las propuestas de la base de datos y las muestro con el siguiente formato--}}
<table id="propuesta" border="1px">
    <tr>
        <th>Propuesta 1</th>
    </tr>
    <tr>
        <td>Titulo</td>
    </tr>
    <tr>
        <td>Sector</td>
    </tr>
    <tr>
        <td id="desc">Descripción</td>
    </tr>
    <tr>
        <td>Recomendación</td>
    </tr>
</table>
<br>

<table id="propuesta" border="1px">
    <tr>
        <th>Propuesta 2</th>
    </tr>
    <tr>
        <td>Titulo</td>
    </tr>
    <tr>
        <td>Sector</td>
    </tr>
    <tr>
        <td id="desc">Descripción</td>
    </tr>
    <tr>
        <td>Recomendación</td>
    </tr>
</table>