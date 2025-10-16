@extends('layouts.app')

@section('content')
    <h1>Detalle Gestor</h1>

    <p><strong>ID:</strong> {{ $gestor->id }}</p>
    <p><strong>Nombre:</strong> {{ $gestor->nombre }}</p>
    <p><strong>Email:</strong> {{ $gestor->email }}</p>

    <a href="{{ route('gestors.index') }}">Volver a la lista</a>
@endsection
