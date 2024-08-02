<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Libro;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderby('id', 'desc')->paginate();
        //return $libros;
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(StoreCurso $request)
    {
        //Validando formulario libro 


        // return $request->all(); Prueba de inserción de datos

        $libro = new Libro();

        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->anioPublicacion = $request->aniopublicacion;
        $libro->ejemplaresDisponibles = $request->ejemplaresdisponibles;
        $libro->edicion = $request->edicion;
        $libro->numerosPaginas = $request->numeropaginas;
        $libro->estadoLibro = $request->estadolibro;

        $libro->save();

        return redirect()->route('libros.show', $libro);
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        //return $libro;
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(StoreCurso $request, Libro $libro)
    {


        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->anioPublicacion = $request->aniopublicacion;
        $libro->ejemplaresDisponibles = $request->ejemplaresdisponibles;
        $libro->edicion = $request->edicion;
        $libro->numerosPaginas = $request->numeropaginas;
        $libro->estadoLibro = $request->estadolibro;

        $libro->save();

        return redirect()->route('libros.show', $libro);
    }
}
