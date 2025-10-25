<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Estudiantes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fondo animado tipo olas RGB oscuras */
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

    /* Efecto glow */
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
          🎓 Lista de <span class="text-violet-400">Estudiantes</span>
      </h1>

      <!-- Botón Crear nuevo -->
      <div class="flex justify-end mb-6">
          <a href="{{ route('estudiantes.create') }}" 
              class="inline-flex items-center bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-1 hover-glow"
              title="Crear un nuevo estudiante"
              role="button">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                   xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m8-8H4"></path>
              </svg>
              Nuevo
          </a>
      </div>

      <!-- Tabla -->
      <div class="overflow-x-auto rounded-2xl shadow-lg bg-white/5 backdrop-blur-md p-4 border border-white/10">
          <table class="min-w-full text-left text-gray-100">
              <thead>
                  <tr class="bg-gradient-to-r from-indigo-700 to-violet-700 text-white uppercase text-sm">
                      <th class="p-4 rounded-tl-xl">Código</th>
                      <th class="p-4">Nombres</th>
                      <th class="p-4">Primer Apellido</th>
                      <th class="p-4">Segundo Apellido</th>
                      <th class="p-4">DNI</th>
                      <th class="p-4">Carrera</th>
                      <th class="p-4 rounded-tr-xl">Ver</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($estudiantes as $estudiante)
                      <tr class="hover:bg-white/10 transition duration-200">
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->codigo }}</td>
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->nombres }}</td>
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->pri_ape }}</td>
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->seg_ape }}</td>
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->dni }}</td>
                          <td class="py-3 px-4 border-b border-white/10">{{ $estudiante->carrera }}</td>
                          <td class="py-3 px-4 border-b border-white/10 text-center">
                              <a href="{{ route('notas.index') }}" 
                                 class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow-md hover-glow">
                                  Ver
                              </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <!-- Botón volver -->
      <div class="flex justify-center mt-8">
          <a href="{{ url('/') }}" 
              class="inline-flex items-center bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-1 hover-glow"
              title="Volver al menú"
              role="button">
              🔙 Menú
          </a>
      </div>

      <div class="flex justify-end mb-4">
    <a href="{{ route('notas.simulacion') }}" 
       class="inline-flex items-center bg-gradient-to-r from-green-500 to-teal-500 
              hover:from-teal-500 hover:to-green-500 text-white font-semibold py-2 px-4 
              rounded-lg shadow-md transition duration-300 hover:-translate-y-1 hover-glow"
       title="Simular Promedio">
        🧮 Simular Promedio
    </a>
</div>


      <!-- Pie -->
      <p class="text-center text-sm text-white/60 mt-6">
          © {{ date('Y') }} Gestor de Notas — Estudiantes
      </p>
  </div>

</body>
</html>