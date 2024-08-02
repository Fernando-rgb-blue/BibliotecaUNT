@extends('layouts.plantilla')
@section('title', 'Libros UNT')
@section('content')

    {{-- Llamando a collecion libro --}}

    <h1>Bienvenidos a la pagina de cursos</h1>

    <a href="{{ route('libros.create') }}"> Crear un curso </a>

    <ul>
        @foreach ($libros as $libro)
            <li>
                <a href="{{ route('libros.show', $libro->id) }}">
                    {{ $libro->titulo }}
                </a>
            </li>
        @endforeach
    </ul>

    {{-- //para paginas --}}

    {{ $libros->links() }}

@endsection
{{-- // prueba lectura --}}
