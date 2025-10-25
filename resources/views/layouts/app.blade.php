<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestor de Notas')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">

    <!-- Barra de navegación (puedes personalizarla) -->
    <nav class="bg-gradient-to-r from-indigo-600 to-violet-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-white">Gestor de Notas</a>
            <div>
                <a href="{{ route('notas.index') }}" class="text-white px-4 py-2">Notas</a>
                <a href="{{ route('notas.simulacion') }}" class="text-white px-4 py-2">Simulación</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>
