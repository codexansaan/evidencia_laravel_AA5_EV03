@extends('layouts.app')

@section('titulo', 'Descripción')

@section('content')

<div class="show">
    <div class="columna1">
    <h3 class="TituloVista">{{$produc->nombre}}</h3>
    <img src="{{ Storage::url($produc->imagen) }}" class="imagen" alt="
    {{($produc->nombre)}}">
    </div>
    <div class="vista">
    <div class="parrafo">
        <p class="card-text">Descripción: {{$produc->descripcion}}</p>
    </div>
    <div>
    <button href="/productos/{{$produc->id}}/edit" class="btnshow">Editar producto</button>
    </div>
    </div>
</div>

@endsection
