<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        $libros = Libro::all();
        return $libros;
        //return view('libros.index'); 
    }

    public function create () { 
        return "Crea un curso";
    }
}
