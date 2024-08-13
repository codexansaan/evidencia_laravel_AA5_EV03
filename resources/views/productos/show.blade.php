@extends('layouts.app')

@section('titulo', 'Descripción')

@section('content')

<div class="show">
    <div class="columna1">

    <img src="{{ Storage::url($produc->imagen) }}" class="imagen" alt="
    {{($produc->nombre)}}">
    </div>
    <div class="vista">
    <h3 class="TituloVista">{{$produc->nombre}}</h3>
    <div class="parrafo">
        <p class="card-text">Descripción: {{$produc->descripcion}}</p>
    </div>
    <div>
    <a href="/productos/{{$produc->id}}/edit" class="btnshow">Editar producto</a>
    <form action="{{ route('productos.destroy', $produc->id) }}" method="POST" id="btn-eliminar">
        @csrf
        @method('DELETE')
        <button  type="submit" class="btn_force"  onclick="confirmDelete()">Eliminar</button>
    </form>
    </div>
    </div>
</div>

@endsection
