@extends('layouts.app')

@section('title', 'Simulación de Notas')

@section('content')

    <div class="bg-white p-6 rounded-lg shadow-lg max-w-xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center text-indigo-600">Simulación de Notas</h2>

        <!-- Formulario de simulación -->
        <form action="{{ route('notas.simulacion.calcular') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="participacion" class="block text-sm font-semibold text-gray-800">Participación</label>
                <input type="number" name="participacion" id="participacion" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required step="0.01" min="0" max="20" value="{{ old('participacion') }}">
            </div>

            <div class="mb-4">
                <label for="habilidades" class="block text-sm font-semibold text-gray-800">Habilidades</label>
                <input type="number" name="habilidades" id="habilidades" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required step="0.01" min="0" max="20" value="{{ old('habilidades') }}">
            </div>

            <div class="mb-4">
                <label for="asistencia" class="block text-sm font-semibold text-gray-800">Asistencia</label>
                <input type="number" name="asistencia" id="asistencia" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required step="0.01" min="0" max="20" value="{{ old('asistencia') }}">
            </div>

            <div class="mb-4">
                <label for="video_test" class="block text-sm font-semibold text-gray-800">Video Test (1-4)</label>
                <input type="text" name="video_test" id="video_test" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required placeholder="Ejemplo: 15,16,14,17" value="{{ old('video_test') }}">
            </div>

            <div class="mb-4">
                <label for="evaluacion_parcial" class="block text-sm font-semibold text-gray-800">Evaluación Parcial (1-4)</label>
                <input type="text" name="evaluacion_parcial" id="evaluacion_parcial" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required placeholder="Ejemplo: 12,14,16,18" value="{{ old('evaluacion_parcial') }}">
            </div>

            <div class="mb-4">
                <label for="entregable" class="block text-sm font-semibold text-gray-800">Entregable</label>
                <input type="number" name="entregable" id="entregable" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required step="0.01" min="0" max="20" value="{{ old('entregable') }}">
            </div>

            <div class="mb-4">
                <label for="examen_final" class="block text-sm font-semibold text-gray-800">Examen Final</label>
                <input type="number" name="examen_final" id="examen_final" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-800" required step="0.01" min="0" max="20" value="{{ old('examen_final') }}">
            </div>

            <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Calcular Promedio
            </button>
        </form>

        @isset($promedio_final)
            <div class="mt-6 text-center">
                <h3 class="text-xl font-semibold text-indigo-600">Promedio Final: {{ $promedio_final }} / 20</h3>
                <h3 class="text-lg font-semibold {{ $estado == 'APROBADO ✅' ? 'text-green-600' : 'text-red-600' }}">Estado: {{ $estado }}</h3>
            </div>
        @endisset
    </div>

@endsection
