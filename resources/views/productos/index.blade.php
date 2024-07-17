@extends('layouts.app')

@section('productos', 'Listado de productos')

@section('content')

<br>
<h3 class="text-center">Listado de Cursos Disponibles</h3>
<br>
<div class="row">
    @foreach ($produc as $producvisto)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 300px; width:200px; margin:20px" src="{{ Storage::url($producvisto->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $producvisto->nombre }}</h5>
                  <p class="card-text">{{ $producvisto->precio }}</p>
                  <a href="/productos/{{$producvisto->id}}" class="btn btn-danger">Descripción</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection
