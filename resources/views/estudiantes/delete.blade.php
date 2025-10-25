<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiantes</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Estudiantes Delete
        </h1>
        <br>

        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        
            @csrf

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Código
                </label>
                <input type="text" name="codigo" value="{{ $estudiante->codigo }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Nombres
                </label>
                <input type="text" name="nombres" value="{{ $estudiante->nombres }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Primer Apellido
                </label>
                <input type="text" name="pri_ape" value="{{ $estudiante->pri_ape }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Segundo Apellido
                </label>
                <input type="text" name="seg_ape" value="{{ $estudiante->seg_ape }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    DNI
                </label>
                <input type="text" name="dni" value="{{ $estudiante->dni }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Carrera
                </label>
                <input type="text" name="carrera" value="{{ $estudiante->dni }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Eliminar
                </button>
            </div>
        </form>

    </body>
</html>