@extends('layouts.admin')

@extends('titulo', 'Materia prima')

@section('content')

<div class="contenido">
    <h2>
        Tabla de materia prima
    </h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($materiasPrimas as $materiaPrima)
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Stock</td>
                    <td>Unidad de medida</td>
                    <td>Precio de unidad</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
