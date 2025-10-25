<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Notas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fondo animado tipo olas RGB oscuras */
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
    /* Efecto glow general */
    .hover-glow:hover {
      box-shadow: 0 0 20px rgba(139, 92, 246, 0.4);
      transform: translateY(-2px);
    }
  </style>
</head>

<body class="flex flex-col font-sans">

  <!-- Barra superior -->
  <header class="flex items-center justify-between px-8 py-4 bg-white/10 backdrop-blur-lg border-b border-white/20 shadow-md">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-10 h-10 text-yellow-300 drop-shadow-lg">
        <circle cx="32" cy="32" r="30" fill="currentColor" opacity="0.15"/>
        <path d="M16 36l8 8 24-24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <h1 class="text-2xl font-extrabold tracking-wide">
        <span class="text-yellow-300">Gestor</span> de Notas
      </h1>
    </div>

    <!-- Botón cerrar sesión -->
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="bg-gradient-to-r from-red-600 to-rose-600 hover:from-rose-600 hover:to-red-600 transition-all duration-200 px-5 py-2 rounded-xl font-semibold shadow-md hover:shadow-rose-400/30 flex items-center gap-2 hover-glow">
        🚪 <span>Cerrar sesión</span>
      </button>
    </form>
  </header>

  <!-- Contenido principal -->
  <main class="flex-grow flex flex-col justify-center items-center px-6 py-10">
    <div class="text-center bg-white/10 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-white/20 w-[90%] md:w-[500px] animate-fadeIn">

      <h2 class="text-4xl font-extrabold mb-6 drop-shadow-md">
        🌙 ¡Bienvenido de nuevo!
      </h2>

      <div class="flex flex-col gap-6 mt-4">
        <!-- Estudiantes -->
        <a href="{{ route('estudiantes.index') }}"
          class="bg-gradient-to-r from-violet-600 to-indigo-500 hover:from-indigo-500 hover:to-violet-600 text-white font-semibold py-4 rounded-xl shadow-md hover:shadow-violet-400/40 transition-all transform hover:-translate-y-1 hover-glow flex items-center justify-center gap-3 text-lg">
          🎓 <span>Estudiantes</span>
        </a>

        <!-- Notas (opcional, puedes activarlo después o eliminarlo) -->
        <!--
        <a href="{{ route('notas.index') }}"
          class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500 text-white font-semibold py-4 rounded-xl shadow-md hover:shadow-cyan-400/40 transition-all transform hover:-translate-y-1 hover-glow flex items-center justify-center gap-3 text-lg">
          📝 <span>Notas</span>
        </a>
        -->
      </div>

      <p class="text-sm text-white/60 mt-10">
        © {{ date('Y') }} — <span class="text-violet-400 font-medium">Gestor de Notas</span><br>
        Todos los derechos reservados.
      </p>
    </div>
  </main>
</body>
</html>