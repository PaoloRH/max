@extends('layouts.app')

@section('content')
    <h1>Crear Gestor</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gestors.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('gestors.index') }}">Volver a la lista</a>
@endsection
