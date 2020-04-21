@extends ("layout")
@section ("contenido")
<h3>Datos del producto</h3>
<div class="container">
    Codigo {{$producto->cod}}<br />
    Nombre {{$producto->nombre_corto}}<br />
    Precio {{$producto->PVP}}<br />
    Descripcion {{$producto->descripcion}}<br />
    Familia {{$producto->familia}}<br />
</div>
@stop