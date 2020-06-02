@extends ("layout2")
@section ("app")

<div class="centro">
    <form action="" method="POST">
    @csrf
    <p>Título <input type="text" placeholder="Título del proyecto" name="titulo"></p>
    <p>Usuario <input type="text"  placeholder="Nombre de usuario" name="usuario"></p>
    <p>Sector <input type="text"  placeholder="Sector del proyecto" name="sector"></p>
    Ciclo
    <select name="ciclo">
        <option value="DAW">DAW</option>
        <option value="DAM">DAM</option>
        <option value="ASIR">ASIR</option>
    </select><br><br>
    Estado
    <select name="estado">
        <option value="Init">Iniciado</option>
        <option value="Term">Terminado</option>
        <option value="Dep">Depositado</option>
    </select><br><br>
    Fase
    <select name="fase">
        <option value="Desc">Descripción</option>
        <option value="Acuerdo">Acuerdo</option>
        <option value="Ana">Análisis</option>
        <option value="Imp">Implementación</option>
        <option value="Cierre">Cierre</option>
    </select>
    Sprint
    <select name="sprint">
        <option value="1">1º</option>
        <option value="2">2º</option>
    </select><br><br>
    <p>Fecha de entrega <input type="text" placeholder="Indica fecha" name="fecha"></p>
    <input type="submit" name="alta" value="Alta">
    <input type="submit" name="baja" value="Baja">
    <input type="submit" name="mod" value="Modificación">
    </form>
    <a href="http://localhost:8000/profesor"><input type="button" name="volver" value="Volver"></a>
</div>
@stop