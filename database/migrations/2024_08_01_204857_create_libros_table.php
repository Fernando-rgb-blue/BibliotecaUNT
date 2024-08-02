<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 70)->nullable();
            $table->string('isbn', 15)->nullable();
            $table->foreignId('idAutor')->constrained('autors');
            $table->foreignId('idCategoria')->constrained('categorias');
            $table->foreignId('idEditorial')->constrained('editorials');
            $table->year('anioPublicacion');
            $table->integer('ejemplaresDisponibles');
            $table->integer('edicion');
            $table->integer('numerosPaginas');
            $table->string('estadoLibro', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
