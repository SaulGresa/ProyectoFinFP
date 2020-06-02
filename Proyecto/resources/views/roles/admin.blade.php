@extends ("layout2")
@section ("app")

<div class="centro">
    <form action="" method="POST">
        @csrf
        <p>Usuario <input type="text" name="user" placeholder="Nombre de usuario"></p>
        <p>Contraseña <input type="password" name="pass" placeholder="Contraseña"></p>
        <p>Nueva contraseña <input type="password" name="pass2" placeholder="Nueva contraseña (Modificación)"></p>
        <p>Email <input type="email" name="email" placeholder="Email"></p>
        Rol
        <select name="rol">
            <option value="Alumno">Alumno</option>
            <option value="Administrador">Administrador</option>
            <option value="Profesor">Profesor</option>
        </select><br><br>
        <input type="submit" name="baja" value="Baja">
        <input type="submit" name="mod" value="Modificación">
    </form>
</div>
@stop