<?php

use App\Http\Controllers\ControladorProductos;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MateriaprimaController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Realizando evidencia GA/-220501096-AA5-EV03';
});

Route::get('/mensaje', [ControladorProductos::class, 'mensaje']);

Route::resource('/productos', ProductosController::class);

Route::resource('/empleados', EmpleadoController::class);

Route::resource('/materiaprimas', MateriaprimaController::class);
