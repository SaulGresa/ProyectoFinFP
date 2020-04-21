@extends ("layout")
@section ("contenido")
    
    <form action="" method="POST">
        @csrf
        <input type="submit" value="Iniciar sesión">
        <input type="submit" value="Registrarse"> 
    </form>

<h1>Estas son las propuestas disponibles ahora mismo</h1>
{{--Recorro las propuestas de la base de datos y las muestro con el siguiente formato--}}
<table border="1px">
    <tr>
        <th>Propuesta 1</th>
    </tr>
    <tr>
        <td>Titulo</td>
    </tr>
    <tr>
        <td>Objetivos</td>
    </tr>
    <tr>
        <td>Vinculación a empresa</td>
    </tr>
    <tr>
        <td>Actividades a realizar</td>
    </tr>
    <tr>
        <td>Recursos necesarios para la ejecución</td>
    </tr>
    <tr>
        <td>Recomendación</td>
    </tr>
     <tr>
        <td>Criterios evaluación</td>
    </tr>
</table>
<br>

<table border="1px">
    <tr>
        <th>Propuesta 2</th>
    </tr>
    <tr>
        <td>Titulo</td>
    </tr>
    <tr>
        <td>Objetivos</td>
    </tr>
    <tr>
        <td>Vinculación a empresa</td>
    </tr>
    <tr>
        <td>Actividades a realizar</td>
    </tr>
    <tr>
        <td>Recursos necesarios para la ejecución</td>
    </tr>
    <tr>
        <td>Recomendación</td>
    </tr>
     <tr>
        <td>Criterios evaluación</td>
    </tr>
</table>
@stop