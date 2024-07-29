@extends('layouts.admin')

@section('empleados', 'Crear empleado')

@section('content')
<section class="titulo"><h2>Nuevo empleado</h2></section>
<form class="formulario" action="/empleados" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-6">
      <label for="nombres" class="form-label">Nombres</label>
      <input type="text" class="form-control" name="nombre" id="inputEmail4">
    </div>
    <div class="col-6">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-6">
      <label for="cedula" class="form-label">Numero de identificación</label>
      <input type="text" class="form-control" id="cedula" name="cedula">
    </div>
    <div class="col-6">
      <label for="salario" class="form-label">Remuneración mensual</label>
      <input type="text" class="form-control" id="salario" name="salario">
    </div>
    <div class="col-6">
      <label for="turno" class="form-label">Turno</label>
      <input type="text" class="form-control" id="turno" name="turno">
    </div>
    <div class="col-6">
      <label for="cargo" class="form-label">Cargo</label>
      <select id="cargo" class="form-select" name="cargo">
        <option selected>Choose...</option>
        <option>Mesero</option>
        <option>Ayudante de cocina</option>
        <option>Panadero/Pizzero</option>
      </select>
    </div>
    <div class="col-6">
        <label for="fechaingreso" class="form-label">Fecha de ingreso</label>
        <input type="date" class="form-control" id="salario" name="fechaingreso">
      </div>
      <div class="col-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
    <div class="col-6">
        <label for="imagen" class="form-label">Cargar foto</label>
        <br>
        <input type="file"  name="imagen" id="imagen">
    </input>
      </div>
    </div>
    <div class="btn-sub">
      <button type="submit" class="btn"><i class="fa-solid fa-floppy-disk fa-3x"></i></button>
    </div>
  </form>

@endsection
