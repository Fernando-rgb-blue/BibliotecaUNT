@extends('layouts.plantilla')
@section('title', 'Crear Libros UNT')

@section('content')

    <h1>Bienvenidos a la pagina de crear libros</h1>


    <form action="{{ route('libros.store') }}" method="POST">

        @csrf

        <label>
            ISBN:
            <br>
            <input type="text" name="isbn" value="{{ old('isbn') }}">
            <br>
        </label>

        @error('isbn')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Código:
            <input type="text" name="codigo" value="{{ old('codigo') }}">
        </label>

        @error('codigo')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Título:
            <input type="text" name="titulo" value="{{ old('titulo') }}">
        </label>

        @error('titulo')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Año de publicación:
            <input type="number" name="aniopublicacion" value="{{ old('aniopublicacion') }}">
        </label>

        @error('aniopublicacion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Ejemplares Disponibles:
            <input type="number" name="ejemplaresdisponibles" value="{{ old('ejemplaresdisponibles') }}">
        </label>

        @error('ejemplaresdisponibles')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Edición:
            <input type="text" name="edicion" value="{{ old('edicion') }}">
        </label>

        @error('edicion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Número de páginas:
            <input type="number" name="numeropaginas" value="{{ old('numeropaginas') }}">
        </label>

        @error('numeropaginas')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <label>
            Estado del libro:
            <input type="text" name="estadolibro" value="{{ old('estadolibro') }}">
        </label>

        @error('estadolibro')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>

        <button type="submit">Enviar Formulario</button>


    </form>

@endsection
