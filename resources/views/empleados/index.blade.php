@extends('layouts.admin')

@section('empleados', 'Empleados')

@section('content')
<section class="titulo"><h2>Lista de empleados</h2></section>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedulas</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Turno</th>
            <th>Fecha ingreso</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody class="filas">
        @foreach ($emplead as $empleadvisto)
            <tr>
                <td>{{$empleadvisto->id}}</td>
                <td>{{ $empleadvisto->nombres }}</td>
                <td>{{ $empleadvisto->apellidos }}</td>
                <td>{{ $empleadvisto->cedula }}</td>
                <td>{{ $empleadvisto->cargo }}</td>
                <td>{{ $empleadvisto->salario }}</td>
                <td>{{ $empleadvisto->turno }}</td>
                <td>{{ $empleadvisto->fechaingreso }}</td>
                <td>{{ $empleadvisto->email }}</td>
                <td>
                    <a href="/empleados/{{$empleadvisto->id}}/edit" class="btn_editar">Editar <a href="/empleados/{{$empleadvisto->id}}/" class="btn_editar">Ver</a></a>

                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<a href="/empleados/create" class="btn_editar">Crear empleado</a>

@endsection
