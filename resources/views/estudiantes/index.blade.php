<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">

    <h1 class="text-3xl font-bold mb-6">Estudiantes</h1>

    <!-- Mostrar mensaje de éxito -->
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Pestañas -->
    <div class="mb-6 border-b border-gray-300">
        <nav class="flex space-x-4" aria-label="Tabs">
            <button id="tab-lista" class="py-2 px-4 border-b-2 border-blue-600 text-blue-600 font-semibold focus:outline-none" onclick="showTab('lista')">
                Lista de Estudiantes
            </button>
            <button id="tab-agregar" class="py-2 px-4 border-b-2 border-transparent text-gray-600 hover:text-blue-600 focus:outline-none" onclick="showTab('agregar')">
                Agregar Estudiante
            </button>
        </nav>
    </div>

    <!-- Contenido pestañas -->
    <div id="content-lista">
        <!-- Tabla con estudiantes -->
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Código</th>
                    <th class="border border-gray-300 px-4 py-2">Nombres</th>
                    <th class="border border-gray-300 px-4 py-2">Primer Apellido</th>
                    <th class="border border-gray-300 px-4 py-2">Segundo Apellido</th>
                    <th class="border border-gray-300 px-4 py-2">DNI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr class="hover:bg-blue-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $estudiante->codigo }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $estudiante->nombres }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $estudiante->pri_ape }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $estudiante->seg_ape }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $estudiante->dni }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="content-agregar" class="hidden max-w-lg bg-gray-50 p-4 rounded shadow">
        <!-- Formulario para agregar estudiante -->
        <form action="{{ route('estudiantes.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-6">
                <label for="codigo" class="block text-gray-700 text-sm font-bold mb-2">Código</label>
                <input type="text" name="codigo" id="codigo" autocomplete="off" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="nombres" class="block text-gray-700 text-sm font-bold mb-2">Nombres</label>
                <input type="text" name="nombres" id="nombres" autocomplete="off" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="pri_ape" class="block text-gray-700 text-sm font-bold mb-2">Primer Apellido</label>
                <input type="text" name="pri_ape" id="pri_ape" autocomplete="off" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="seg_ape" class="block text-gray-700 text-sm font-bold mb-2">Segundo Apellido</label>
                <input type="text" name="seg_ape" id="seg_ape" autocomplete="off" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="dni" class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
                <input type="text" name="dni" id="dni" autocomplete="off" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Agregar Estudiante
                </button>
            </div>
        </form>
    </div>

    <script>
        function showTab(tab) {
            const tabLista = document.getElementById('tab-lista');
            const tabAgregar = document.getElementById('tab-agregar');
            const contentLista = document.getElementById('content-lista');
            const contentAgregar = document.getElementById('content-agregar');

            if (tab === 'lista') {
                tabLista.classList.add('border-blue-600', 'text-blue-600', 'font-semibold');
                tabLista.classList.remove('border-transparent', 'text-gray-600');
                tabAgregar.classList.remove('border-blue-600', 'text-blue-600', 'font-semibold');
                tabAgregar.classList.add('border-transparent', 'text-gray-600');

                contentLista.classList.remove('hidden');
                contentAgregar.classList.add('hidden');
            } else if (tab === 'agregar') {
                tabAgregar.classList.add('border-blue-600', 'text-blue-600', 'font-semibold');
                tabAgregar.classList.remove('border-transparent', 'text-gray-600');
                tabLista.classList.remove('border-blue-600', 'text-blue-600', 'font-semibold');
                tabLista.classList.add('border-transparent', 'text-gray-600');

                contentAgregar.classList.remove('hidden');
                contentLista.classList.add('hidden');
            }
        }
    </script>

</body>
</html>
