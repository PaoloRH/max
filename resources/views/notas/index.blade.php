<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Notas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fondo animado oscuro tipo olas RGB*/
    body {
      background: linear-gradient(-45deg, #0f172a, #1e1b4b, #3b0764, #450a0a);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
      min-height: 100vh;
      font-family: 'Inter', system-ui, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding: 40px 16px;
      color: #f8fafc;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Brillo suave al pasar el cursor */
    .hover-glow:hover {
      box-shadow: 0 0 20px rgba(139, 92, 246, 0.4);
      transform: translateY(-2px);
    }
  </style>
</head>

<body>

  <!-- Contenedor principal -->
  <div class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-8 w-[95%] md:w-[90%] max-w-5xl border border-white/20 transition-all duration-300">

    <!-- Título -->
    <h1 class="text-4xl font-extrabold text-center mb-8 drop-shadow-lg">
      📝 Registro de <span class="text-violet-400">Notas</span>
    </h1>

    <!-- Botón volver al menú -->
    <div class="flex justify-end mb-6">
      <a href="{{ url('/') }}" 
         class="inline-flex items-center bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-1 hover-glow"
         title="Volver al menú"
         role="button">
         🔙 Menú
      </a>
    </div>

    <!-- Tabla -->
    <div class="overflow-x-auto rounded-2xl shadow-lg bg-white/5 backdrop-blur-md p-4 border border-white/10">
      <table class="min-w-full text-left text-gray-100">
        <thead>
          <tr class="bg-gradient-to-r from-indigo-700 to-violet-700 text-white uppercase text-sm">
            <th class="p-4 rounded-tl-xl">Estudiante</th>
            <th class="p-4">Curso</th>
            <th class="p-4">Descripción</th>
            <th class="p-4">Nota</th>
            <th class="p-4 rounded-tr-xl">Ver</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notas as $nota)
            <tr class="hover:bg-white/10 transition duration-200">
              <td class="py-3 px-4 border-b border-white/10">
                {{ $nota->estudiante->nombres }} {{ $nota->estudiante->apellidos }}
              </td>
              <td class="py-3 px-4 border-b border-white/10">{{ $nota->curso }}</td>
              <td class="py-3 px-4 border-b border-white/10">{{ $nota->descripcion }}</td>
              <td class="py-3 px-4 border-b border-white/10 font-semibold text-violet-300">
                {{ $nota->nota }}
              </td>
              <td class="py-3 px-4 border-b border-white/10 text-center">
                <a href="{{ route('notas.show', $nota->id) }}" 
                   class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover-glow">
                  Ver
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Pie -->
    <p class="text-center text-sm text-white/60 mt-6">
      © {{ date('Y') }} Gestor de Notas — Registro Académico
    </p>
  </div>
//gestos de notas 
<div class="mt-8 bg-white/10 p-6 rounded-2xl border border-white/20">
  <h2 class="text-2xl font-bold mb-4 text-violet-300">Simulador de Promedio</h2>
  <form action="{{ route('notas.simular') }}" method="POST" class="space-y-4">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <input type="number" step="0.1" min="0" max="20" name="participacion" placeholder="Participación (10%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="habilidades" placeholder="Habilidades (10%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="asistencia" placeholder="Asistencia (10%)" class="p-2 rounded-lg w-full text-black">

      <input type="number" step="0.1" min="0" max="20" name="video_test_1" placeholder="Video Test 1 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="video_test_2" placeholder="Video Test 2 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="video_test_3" placeholder="Video Test 3 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="video_test_4" placeholder="Video Test 4 (5%)" class="p-2 rounded-lg w-full text-black">

      <input type="number" step="0.1" min="0" max="20" name="parcial_1" placeholder="Parcial 1 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="parcial_2" placeholder="Parcial 2 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="parcial_3" placeholder="Parcial 3 (5%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="parcial_4" placeholder="Parcial 4 (5%)" class="p-2 rounded-lg w-full text-black">

      <input type="number" step="0.1" min="0" max="20" name="entregable" placeholder="Entregable (30%)" class="p-2 rounded-lg w-full text-black">
      <input type="number" step="0.1" min="0" max="20" name="examen_final" placeholder="Examen Final (30%)" class="p-2 rounded-lg w-full text-black">
    </div>

    <button type="submit" class="mt-4 bg-violet-600 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded-lg w-full transition hover-glow">
      Calcular Promedio
    </button>
  </form>

  @isset($promedio)
    <p class="mt-4 text-xl font-semibold text-cyan-300">Promedio Simulado: {{ $promedio }}</p>
    <p class="text-sm text-white/70">{{ $promedio >= 10.5 ? '¡Aprobado!' : 'No aprobado' }}</p>
  @endisset
</div>

</body>
</html>