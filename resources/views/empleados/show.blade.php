@extends('layouts.admin')

@section('empleados', 'Lista de empleados')

@section('content')
<section class="titulo"><h2>Lista de empleados</h2></section>

<div class="carnet">
    <div class="image-container">
        <img class="employee-image" src="{{ Storage::url($emplead->fotocarnet) }}" alt="Foto de perfil">
    </div>
    <div class="info-container">
        <h2>{{ $emplead->nombres }} {{ $emplead->apellidos }}</h2>
        <p><strong>Cédula:</strong> {{ $emplead->cedula }}</p>
        <p><strong>Cargo:</strong> {{ $emplead->cargo }}</p>
        <p><strong>Salario:</strong> {{ $emplead->salario }}</p>
        </div>
</div>




@endsection
