@extends ("layout2")
@section ("app")

<div class="centro">
    <h2>Iniciar sesión</h2>
    <form method="POST">
        @csrf
        <p>Usuario <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
        <p>Contraseña <input type="password" name="contra" placeholder="Contraseña"></p>
        Rol
        <select name="rol">
            <option value="Alumno">Alumno</option>
            <option value="Administrador">Administrador</option>
            <option value="Profesor">Profesor</option>
        </select><br><br>
        {{-- Comprueba que los datos coinciden con los ya existentes y redirige a la pagina correspondiente --}}
        <input type="submit" value="Entrar">
    </form>
</div>
    
    