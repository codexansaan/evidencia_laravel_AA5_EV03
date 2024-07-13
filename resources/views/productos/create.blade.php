@extends('layouts.app')

@section('productos', 'Crear producto')

@section('content')

<h3>Productos</h3>
<form class="row g-3" action="/productos" method="POST">
    @csrf
    <div class="col-md-4">
      <label  class="form-label">Nombre</label>
      <input type="string" class="form-control" name="nombre" id="nombre">
    </div>
    <div class="col-md-3">
      <label  class="form-label">Precio</label>
      <input type="double" class="form-control" name="precio" id="precio">
    </div>
    <div class="col-md-3">
        <label  class="form-label">Cantidad a agregar</label>
        <input type="number" class="form-control" name="stock" id="stock">
      </div>
    <div class="col-8">
      <label  class="form-label">Descripción</label>
      <input type="text" class="form-control" name="descripcion" id="descripcion">
    </input>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Crear producto</button>
    </div>


  </form>

@endsection
