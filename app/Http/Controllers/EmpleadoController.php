<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplead = Empleado::all();
        return view('empleados.index', compact('emplead'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emplead = new Empleado();
        $emplead->nombres = $request->input('nombres');
        $emplead->apellidos = $request->input('apellidos');
        $emplead->cedula = $request->input('cedula');
        $emplead->cargo = $request->input('cargo');
        $emplead->salario = $request->input('salario');
        $emplead->turno = $request->input('turno');
        $emplead->fechaingreso = $request->input('fechaingreso');
        $emplead->email = $request->input('email');
        if($request->hasFile('fotocarnet')){
            $emplead->fotocarnet = $request->file('fotocarnet')->store('/resources/img/empleadofotocarne');
        }
        $emplead->save();
        return redirect()->back()->with('success', 'Datos guardados con éxito!');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //leer empleado
        $emplead = Empleado::find($id);
        return view('empleados.show', compact('emplead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $emplead = Empleado::find($id);
        return view('empleados.edit', compact('emplead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emplead = Empleado::find($id);
        $emplead->fill($request->except('fotocarnet'));
        if ($request->hasFile('fotocarnet')){
            $emplead->fotocarnet = $request->file('fotocarnet')->store('/resources/img/empleadofotocarne');
            $emplead->save();
            return 'Empleado actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
