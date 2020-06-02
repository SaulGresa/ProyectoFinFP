@extends ("layout2")
@section ("app")

<div class="centro">
    <h2>¿Qué quieres hacer?</h2>
    <a href="{{url('profesor/download')}}"><input type="button" value="Descargar rúbrica"></a><br><br>
    <a href="http://localhost:8000/propuesta"><input type="button" value="Manejar propuestas"></a><br><br>
    <a href="http://localhost:8000/proyecto"><input type="button" value="Manejar proyectos"></a><br><br>
    <a href="http://localhost:8000/proyectoBD"><input type="button" value="Ver proyectos BD"></a>
</div>

