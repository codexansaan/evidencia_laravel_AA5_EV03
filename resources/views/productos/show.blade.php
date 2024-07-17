@extends('layouts.app')

@section('titulo', 'Descripción')

@section('content')

<div class="text-center">
    <img style="height: 600px; width:400px; margin:20px" src="{{ Storage::url($produc->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">Descripción: {{$produc->descripcion}}</p>
    </div>
    <br>
    <a href="/productos/{{$produc->id}}/edit" class="btn btn-warning">Editar producto</a>

</div>

@endsection
