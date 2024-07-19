<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(LibroController::class)->group(function () {
         Route::get('libros', 'index') -> name('libros.index');
         Route::get('libros/create', 'create')->name('libros.create');
        // // Route::post('curso', 'store')->name('libros.store');
        // Route::get('libros/{libros}', 'show')->name('libros.show');
        // Route::get('curso/{curso}/edit', 'edit')->name('libros.edit');
        // Route::put('curso/{curso}', 'update')->name('libros.update');
    }
);

