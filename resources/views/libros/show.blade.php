@extends('layouts.plantilla')
@section('title', 'Curso ' . $libro->titulo)

@section('content')

    <h1>Bienvenido al curso {{$libro->titulo}} </h1>

    <a href="{{route('libros.index')}}"> Volver a la pagina principal de libros</a>

    <p><strong> N° De Ejemplares: </strong> {{$libro->ejemplaresDisponibles}}</p>

    <p><strong> Año de publicación: </strong> {{$libro->anioPublicacion}}</p>

    <a href={{route('libros.edit', $libro)}}> Actualizar Datos</a>


@endsection
