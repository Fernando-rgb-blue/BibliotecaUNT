@extends('layouts.plantilla')
@section('title', 'Crear Libros UNT')

@section('content')

    <h1>Bienvenidos a la pagina de actualizar datos libros</h1>

    <form action="{{ route('libros.update', $libro) }}" method="POST">
        @csrf
        @method('put')

        <label>
            ISBN:
            <br>
            <input type="text" name="isbn" value="{{ old('isbn', $libro->isbn) }}">
        </label>
        @error('isbn')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Código:
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $libro->codigo) }}">
        </label>
        @error('codigo')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Título:
            <br>
            <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}">
        </label>
        @error('titulo')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Año de publicación:
            <br>
            <input type="number" name="aniopublicacion" value="{{ old('aniopublicacion', $libro->aniopublicacion) }}">
        </label>
        @error('aniopublicacion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Ejemplares Disponibles:
            <br>
            <input type="number" name="ejemplaresdisponibles"
                value="{{ old('ejemplaresdisponibles', $libro->ejemplaresdisponibles) }}">
        </label>
        @error('ejemplaresdisponibles')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Edición:
            <br>
            <input type="text" name="edicion" value="{{ old('edicion', $libro->edicion) }}">
        </label>
        @error('edicion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Número de páginas:
            <br>
            <input type="number" name="numeropaginas" value="{{ old('numeropaginas', $libro->numeropaginas) }}">
        </label>
        @error('numeropaginas')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Estado del libro:
            <br>
            <input type="text" name="estadolibro" value="{{ old('estadolibro', $libro->estadolibro) }}">
        </label>
        @error('estadolibro')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <button type="submit">Actualizar Formulario</button>
    </form>



@endsection
