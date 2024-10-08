@extends('layouts.admin')

@section('titulo', 'Administración')

@section('content')

<div class="contenido">
    <h2 class="titulo">
        Editar materia prima
    </h2>
    <form class="materia" action="/materiaprimas/{{$materia->id}}" method="POST">
        @method('PUT')
        @csrf
        <div>
        <label class="form-label" for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$materia->nombre}}"></input>
        </div>
        <div>
            <label class="form-label" for="stock">Stock</label>
            <input type="double" name="stock" value="{{$materia->stock}}"></input>
        </div>
        <div>
            <label class="form-label" for="unidadmedida">Unidad de medida</label>
            <select class="form-select" id="unidadmedida" name="unidadmedida">
                <option selected>{{$materia->unidadmedida}}</option>
                <option value="Kilos">Kilos</option>
                <option value="Litros">Litros</option>
                <option value="Libras">Libras</option>
                <option value="Paquete">Paquete</option>
                <option value="Paquetes x25">Paquete x25</option>
                <option value="Paquete x50">Paquete x50</option>
                <option value="Paquete x100">Paquete x100</option>
                <option value="Cajas">Cajas</option>
                <option value="Unidades">Unidades</option>
            </select>
        </div>
        <div>
            <label class="form-label" for="preciounidad">Precio de unidad</label>
            <input type="double" name="preciounidad" value="{{$materia->preciounidad}}"></input>
        </div>
        <button type="submit" class="btn_materia"><i class="fa-solid fa-floppy-disk fa-3x"></i></button>
    </form>

</div>




@endsection
