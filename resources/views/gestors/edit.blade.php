@extends('layouts.app')

@section('content')
    <h1>Editar Gestor</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gestors.update', $gestor) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre', $gestor->nombre) }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $gestor->email) }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('gestors.index') }}">Volver a la lista</a>
@endsection
