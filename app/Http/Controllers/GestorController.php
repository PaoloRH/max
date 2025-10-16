<?php

namespace App\Http\Controllers;

use App\Models\Gestor;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    // Mostrar la lista de gestores
    public function index()
    {
        $gestors = Gestor::all();
        return view('gestors.index', compact('gestors'));
    }

    // Mostrar el formulario para crear un gestor
    public function create()
    {
        return view('gestors.create');
    }

    // Guardar un nuevo gestor
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:gestors,email',
        ]);

        Gestor::create($request->only('nombre', 'email'));

        return redirect()->route('gestors.index')->with('success', 'Gestor creado correctamente.');
    }

    // Mostrar un gestor específico
    public function show(Gestor $gestor)
    {
        return view('gestors.show', compact('gestor'));
    }

    // Mostrar el formulario para editar un gestor
    public function edit(Gestor $gestor)
    {
        return view('gestors.edit', compact('gestor'));
    }

    // Actualizar un gestor
    public function update(Request $request, Gestor $gestor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:gestors,email,' . $gestor->id,
        ]);

        $gestor->update($request->only('nombre', 'email'));

        return redirect()->route('gestors.index')->with('success', 'Gestor actualizado correctamente.');
    }

    // Eliminar un gestor
    public function destroy(Gestor $gestor)
    {
        $gestor->delete();

        return redirect()->route('gestors.index')->with('success', 'Gestor eliminado correctamente.');
    }
}
