@extends('layouts.admin')

@section('materiaprima', 'Crear Materia Prima')

@section('content')

<div class="contenido">
    <h2 class="titulo_detalle">
        Tabla de materia prima
    </h2>
    <table class="table_materia">
        <thead>
            <tr>
                <th >ID</th>
                <th >Nombre</th>
                <th >Stock</th>
                <th >Unidad de medida</th>
                <th >Precio unidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materia as $materias)
                <tr>
                    <td>{{ $materias->id }}</td>
                    <td>{{ $materias->nombre }}</td>
                    <td>{{ $materias->stock }}</td>
                    <td>{{ $materias->unidadmedida }}</td>
                    <td>{{ $materias->preciounidad }}</td>
                    <td>
                        <a href="/materiaprimas/{{$materias->id}}" class="btn_ver">Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/materiaprimas/create" class="btn_crear">Crear nueva</a>
</div>



@endsection
