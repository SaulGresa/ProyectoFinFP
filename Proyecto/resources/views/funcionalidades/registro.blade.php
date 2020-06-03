@extends ("layout2")
@section ("app")
<div class="centro">
    <h2>Registro</h2>
    
    <form  action="registro" method="POST">
    @csrf
    <p>Nombre completo<input type="text" name="nombre" placeholder="Nombre y apellidos"></p>
    <p>Usuario <input type="text" name="user" placeholder="Nombre de usuario"></p>
    <p>Contraseña <input type="password" name="pass" placeholder="Contraseña"></p>
    <p>Email <input type="email" name="email" placeholder="Email"></p>
     Rol
        <select name="rol">
            <option value="Alumno">Alumno</option>
            <option value="Administrador">Administrador</option>
            <option value="Profesor">Profesor</option>
        </select>
    {{-- Comprueba que los datos no coinciden con los ya existentes y redirige a iniciar sesión --}}
    <input type="submit" value="Registrarse">
</form>

</div>


