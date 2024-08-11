<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produc = Producto::all();
        return view('productos.index', compact('produc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produc = new Producto();
        $produc->nombre = $request->input('nombre');
        $produc->stock = $request->input('stock');
        $produc->precio = $request->input('precio');
        $produc->descripcion = $request->input('descripcion');
        if($request->hasFile('imagen')){
            $produc->imagen = $request->file('imagen')->store('public/productos');
        }
        $produc->save();
        return 'Guardado con éxito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produc = Producto::find($id);
        return view('productos.show', compact('produc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produc = Producto::find($id);
        return view('productos.edit', compact('produc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produc = Producto::find($id);
        $produc->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $produc->imagen = $request->file('imagen')->store('public/productos');
            $produc->save();
            return 'Producto actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produc = Producto::find($id);

        if (!$produc) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }

        $produc->forceDelete();

    return redirect()->route('productos.index')->with('success', 'Eliminado exitosamente');

    }
}
