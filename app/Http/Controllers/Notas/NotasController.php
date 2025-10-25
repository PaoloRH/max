<?php

namespace App\Http\Controllers\Notas;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NotasController extends Controller
{
    public function index(Request $request)
    {
        $notas = Nota::with('estudiante')->get();
        return View::make('notas.index', compact('notas'));
    }

    // Mostrar formulario de simulación
    public function simulacion()
    {
        return view('notas.simulacion');
    }

    // Procesar la simulación
    public function calcularSimulacion(Request $request)
    {
        $data = $request->validate([
            'participacion' => 'required|numeric|min:0|max:20',
            'habilidades' => 'required|numeric|min:0|max:20',
            'asistencia' => 'required|numeric|min:0|max:20',
            'video_test' => 'required|string',
            'evaluacion_parcial' => 'required|string',
            'entregable' => 'required|numeric|min:0|max:20',
            'examen_final' => 'required|numeric|min:0|max:20',
        ]);

        $notas = [
            'participacion' => $data['participacion'],
            'habilidades' => $data['habilidades'],
            'asistencia' => $data['asistencia'],
            'video_test' => array_map('floatval', explode(',', $data['video_test'])),
            'evaluacion_parcial' => array_map('floatval', explode(',', $data['evaluacion_parcial'])),
            'entregable' => $data['entregable'],
            'examen_final' => $data['examen_final']
        ];

        $pesos = [
            'participacion' => 10,
            'habilidades' => 10,
            'asistencia' => 10,
            'video_test' => 20,
            'evaluacion_parcial' => 20,
            'entregable' => 30,
            'examen_final' => 30
        ];

        $sum_ponderada = 0;
        $sum_pesos = 0;

        foreach ($notas as $modulo => $nota) {
            $promedio = is_array($nota) ? array_sum($nota)/count($nota) : $nota;
            $sum_ponderada += $promedio * $pesos[$modulo];
            $sum_pesos += $pesos[$modulo];
        }

        $promedio_final = round($sum_ponderada / $sum_pesos, 2);
        $estado = $promedio_final >= 10.5 ? 'APROBADO ✅' : 'REPROBADO ❌';

        return view('notas.simulacion', compact('promedio_final', 'estado', 'notas'));
    }
}
