<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inicio</title>
</head>
<body>
    <a href="{{ route('saluditos') }}">Saludos</a><br>
    <a href="{{ route('bienvenidos') }}">Bienvenidos</a><br>
    <a href="{{ route('estudiantes.index') }}">Estudiantes</a><br>
    <a href="{{ route('gestors.index') }}">Gestores</a><br>
    <a href="{{ route('notas.index') }}">Notas</a><br>
</body>
</html>
