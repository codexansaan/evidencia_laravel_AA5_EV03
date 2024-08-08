@extends('layouts.app')

@section('productos', 'Crear producto')

@section('content')


<form class="row g-3 formulario" action="/productos" method="POST" enctype="multipart/form-data">
    @csrf
    <h3 class="TituloVista">Crear producto</h3>
    <div class="col-md-4">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <div class="col-md-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="double" class="form-control" name="precio" id="precio">
    </div>
    <div class="col-md-3">
        <label for="stock" class="form-label">Cantidad a agregar</label>
        <input type="number" class="form-control" name="stock" id="stock">
      </div>
    <div class="col-8">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea type="text" class="form-control Indescripcion" name="descripcion" id="descripcion">
      </textarea>
    </div>
    <div class="col-8">
        <label for="imagen" class="form-label">Cargar imagen</label>
        <br>
        <input type="file"  name="imagen" id="imagen">
    </input>
    </div>

    <div class="col-12">
      <button type="submit" class="btn">Crear producto</button>
    </div>


  </form>

@endsection
