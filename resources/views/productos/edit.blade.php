@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')


<form class="row g-3 formulario" action="/productos/{{$produc->id}}" method="POST" enctype="multipart/form-data">
    <h3 class="TituloVista">Actualizar producto</h3>
    @method('PUT')
    @csrf
    <div class="col-md-4">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="string" class="form-control" name="nombre" id="nombre" value="{{$produc->nombre}}">
    </div>
    <div class="col-md-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="double" class="form-control" name="precio" id="precio" value="{{$produc->precio}}">
    </div>
    <div class="col-md-3">
        <label for="stock" class="form-label">Cantidad a agregar</label>
        <input type="number" value="{{$produc->stock}}" class="form-control" name="stock" id="stock">
      </div>
    <div class="col-8">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea type="text" class="form-control Indescripcion" name="descripcion" id="descripcion">
    {{$produc->descripcion}}</textarea>
    </div>
    <div class="col-8">
        <label for="imagen" class="form-label">Cargar nueva imagen</label>
        <br>
        <input type="file"  name="imagen" id="imagen">
    </input>
    </div>
    <div class="col-12">
        <button type="submit" class="btn">Guardar cambios</button>
      </div>


@endsection


