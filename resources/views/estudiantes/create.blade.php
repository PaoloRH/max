<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Estudiante</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Fondo animado oscuro tipo olas RGB */
    body {
      background: linear-gradient(-45deg, #0f172a, #1e1b4b, #3b0764, #450a0a);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
      min-height: 100vh;
      font-family: 'Inter', system-ui, sans-serif;
      color: #f8fafc;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Animaciones suaves */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeIn {
      animation: fadeIn 0.8s ease-out;
    }

    /* Efecto de brillo suave al pasar el mouse */
    .hover-glow:hover {
      box-shadow: 0 0 20px rgba(139, 92, 246, 0.4);
      transform: translateY(-2px);
    }
  </style>
</head>

<body class="flex flex-col font-sans">

  <!-- Encabezado -->
  <header class="flex items-center justify-between px-8 py-4 bg-white/10 backdrop-blur-lg border-b border-white/20 shadow-md">
    <h1 class="text-2xl font-extrabold tracking-wide text-yellow-300 drop-shadow-lg">
      🎓 Registrar Estudiante
    </h1>

    <a href="{{ route('estudiantes.index') }}"
      class="bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-semibold px-5 py-2 rounded-xl shadow-md hover:shadow-violet-400/40 transition-all duration-200 flex items-center gap-2 hover-glow">
      ⬅ Volver
    </a>
  </header>

  <!-- Contenido principal -->
  <main class="flex-grow flex flex-col justify-center items-center px-4 py-10 animate-fadeIn">
    <form action="{{ route('estudiantes.store') }}" method="POST"
      class="bg-white/10 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-white/20 w-[90%] md:w-[500px]">
      
      @csrf

      <h2 class="text-3xl font-bold text-center mb-8 text-yellow-300 drop-shadow-md">
        🧾 Formulario Estudiante
      </h2>

      <!-- Código -->
      <div class="mb-6">
        <label class="block text-white/90 text-sm font-semibold mb-2">Código</label>
        <input type="text" name="codigo" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- Nombres -->
      <div class="mb-6">
        <label class="block text-white/90 text-sm font-semibold mb-2">Nombres</label>
        <input type="text" name="nombres" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- Primer Apellido -->
      <div class="mb-6">
        <label class="block text-white/90 text-sm font-semibold mb-2">Primer Apellido</label>
        <input type="text" name="pri_ape" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- Segundo Apellido -->
      <div class="mb-6">
        <label class="block text-white/90 text-sm font-semibold mb-2">Segundo Apellido</label>
        <input type="text" name="seg_ape" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- DNI -->
      <div class="mb-6">
        <label class="block text-white/90 text-sm font-semibold mb-2">DNI</label>
        <input type="text" name="dni" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- Carrera -->
      <div class="mb-8">
        <label class="block text-white/90 text-sm font-semibold mb-2">Carrera</label>
        <input type="text" name="carrera" autocomplete="off"
          class="w-full px-3 py-2 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-violet-500">
      </div>

      <!-- Botón guardar -->
      <div class="flex justify-center">
        <button type="submit"
          class="bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-bold py-3 px-8 rounded-xl shadow-md hover:shadow-violet-400/40 transition-all duration-200 transform hover:-translate-y-1 hover-glow">
          💾 Guardar
        </button>
      </div>
    </form>
  </main>
</body>
</html>