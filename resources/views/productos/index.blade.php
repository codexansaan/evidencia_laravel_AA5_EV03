@extends('layouts.app')

@section('productos', 'Listado de productos')

@section('content')


<h3 class="TituloVista">Listado de productos disponibles</h3>

<div class="row">
    @foreach ($produc as $producvisto)
        <div class="col-sm mb-5">
            <div class="card" style="width: 18rem;">
                <img style="height: 300px; width:200px; margin:20px" src="{{ Storage::url($producvisto->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $producvisto->nombre }}</h5>
                  <p class="card-text">{{ $producvisto->precio }}</p>
                  <a href="/productos/{{$producvisto->id}}" class="btn">Descripción</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection
