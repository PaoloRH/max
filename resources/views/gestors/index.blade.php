@extends('layouts.app')

@section('content')
    <h1>Lista de Gestores</h1>

    {{-- <a href="{{ route('gestors.create') }}">Crear nuevo Gestor</a> --}}

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 10px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gestors as $gestor)
                <tr>
                    <td>{{ $gestor->id }}</td>
                    <td>{{ $gestor->nombre }}</td>
                    <td>{{ $gestor->email }}</td>
                    <td>
                        <a href="{{ route('gestors.show', $gestor) }}">Ver</a> |
                        <a href="{{ route('gestors.edit', $gestor) }}">Editar</a> |
                        <form action="{{ route('gestors.destroy', $gestor) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Eliminar este gestor?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
