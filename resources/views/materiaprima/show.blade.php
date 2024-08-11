@extends('layouts.admin')

@section('materiaprimas', 'Detalle Materia prima')
<script src="{{ asset('js/app.js') }}"></script>

@section('content')

<div class="detalle">
    <h1 class="titulo_detalle">Detalles</h1>
    <section class="detalle_propie">
    <h5 class="propiedades">Nombre:</h5><p class="propie_instancia">{{ $materia->nombre }}</p>
    <h5 class="propiedades">Cantidad disponible:</h5><p class="propie_instancia">{{ $materia->stock }} </p>
    <h5 class="propiedades">Unidad de medida:</h5><p class="propie_instancia"> {{ $materia->unidadmedida }} </p>
    <h5 class="propiedades">Precio de unidad:</h5><p class="propie_instancia"> {{ $materia->preciounidad}} </p>
    </section>
    <div class="botonesmate">
    <a href="/materiaprimas/{{$materia->id}}/edit" class="btn_editar">Editar</a>
    <form action="{{ route('materiaprimas.destroy', $materia->id) }}" method="POST" id="btn-eliminar">
        @csrf
        @method('DELETE')
        <button  type="submit" class="btn_force"  onclick="confirmDelete()">Eliminar</button>
    </form>
</div>
</div>



@endsection
