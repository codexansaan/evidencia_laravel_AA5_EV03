@extends('layouts.admin')

@section('empleados', 'Crear empleado')

@section('content')
<section class="titulo"><h2>Editar empleado</h2></section>


<form class="formulario" action="/empleados/{{$emplead->id}}" method="POST" enctype="multipart/form-data">

    @method('PUT')
    @csrf
    <div class="col-6">
      <label for="nombres" class="form-label">Nombres</label>
      <input type="text" class="form-control" name="nombres" id="inputEmail4" value="{{$emplead->nombres}}">
    </div>
    <div class="col-6">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="inputPassword4" name="apellidos" value="{{$emplead->apellidos}}">
    </div>
    <div class="col-6">
      <label for="cedula" class="form-label">Numero de identificación</label>
      <input type="text" class="form-control" id="cedula" name="cedula" value="{{$emplead->cedula}}">
    </div>
    <div class="col-6">
      <label for="salario" class="form-label">Remuneración mensual</label>
      <input type="text" class="form-control" id="salario" name="salario" value="{{$emplead->salario}}">
    </div>
    <div class="col-6">
        <label for="turno" class="form-label">Turno</label>
        <select class="form-select" id="turno" name="turno">
            <option selected>{{$emplead->turno}}</option>
            <option value="mañana">Mañana</option>
          <option value="tarde">Tarde</option>
        </select>
    </div>
    <div class="col-6">
      <label for="cargo" class="form-label">Cargo</label>
      <select id="cargo" class="form-select" name="cargo">
        <option selected>{{$emplead->cargo}}</option>
        <option>Mesero</option>
        <option>Ayudante de cocina</option>
        <option>Panadero/Pizzero</option>
        <option>Caja</option>
      </select>
    </div>
    <div class="col-6">
        <label for="fechaingreso" class="form-label">Fecha de ingreso</label>
        <input type="date" class="form-control" id="salario" name="fechaingreso" value="{{$emplead->fechaingreso}}">
      </div>
      <div class="col-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$emplead->email}}">
      </div>
    <div class="col-6">
        <label for="imagen" class="form-label">Cargar foto</label>
        <br>
        <input type="file"  name="fotocarnet" id="imagen">
    </input>
      </div>
    </div>
    <div class="btn-sub">
      <button type="submit" class="btn"><i class="fa-solid fa-floppy-disk fa-3x"></i>Guardar Cambios</button>
    </div>

  </form>

@endsection
