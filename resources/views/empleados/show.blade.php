@extends('layouts.admin')

@section('empleados', 'Lista de empleados')

@section('content')
<section class="titulo"><h2>Lista de empleados</h2></section>

<div class="carnet">

    <div class="informacion">
        <p>{{$emplead->nombres}}</p>
        <p>{{$emplead->cedula}}</p>
    </div>
</div>




@endsection
