<?php

namespace App\Http\Controllers;

use App\Models\Materiaprima;
use Illuminate\Http\Request;

class MateriaprimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materia = Materiaprima::all();
        return view('materiaprima.index', compact('materia'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materiaprima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'stock' => 'required|numeric',
            'unidadmedida' => 'required|string',
            'preciounidad' => 'required|numeric',
        ]);

        try {
            $materia = new Materiaprima();
            $materia->fill($request->all());
            $materia->save();

            return redirect()->back()->with('success', 'La materia prima se ha creado correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al guardar la materia prima.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('materiaprima.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
