@extends ("layout2")
@section ("app")

<div class="centro">
    <p>Código <input type="text" name="cod" placeholder="Código propuesta"></p>
    <input type="button" name="baja" value="Baja"><br>
    <p>Título <input type="text" name="title" placeholder="Título propuesta"></p>
    <p>Sector <input type="text" name="sector" placeholder="Sector propuesta"></p>
    <p>Descripcion <input type="text" name="desc" placeholder="Describe la propuesta"></p>
    <p>Recomendación <input type="text" name="rec" placeholder="Recomendación"></p>
    <input type="button" name="alta" value="Alta">
    <input type="button" name="mod" value="Modificación">
    <a href="http://localhost:8000/profesor"><input type="button" name="volver" value="Volver"></a>
</div>
@stop