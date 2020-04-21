@extends ("layout")
@section ("contenido")

<h1>Estoy gestionando la empresa</h1>
<h3>Listado de productos</h3>
        
@foreach ($productos as $producto)
<form action="editar" method="POST">
    @csrf
    
    {{$producto->cod}} --- {{$producto->nombre_corto}} --- {{$producto->PVP}} Euros
    <input type="submit" value="Editar"><br />
    <input type="hidden" name="cod" value="{{$producto->cod}}"> 
</form>

@endforeach

@stop