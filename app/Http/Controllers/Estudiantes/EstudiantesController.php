<?php

namespace App\Http\Controllers\Estudiantes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Importa Request para manejar solicitudes HTTP
use App\Models\Estudiante;

class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Nuevo método para guardar estudiante
    public function store(Request $request)
    {
        // Validar los datos enviados
        $request->validate([
            'codigo' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'pri_ape' => 'required|string|max:255',
            'seg_ape' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
        ]);

        // Crear estudiante con los datos validados
        Estudiante::create($request->all());

        // Redirigir a la lista con mensaje de éxito
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante agregado correctamente');
    }
}
