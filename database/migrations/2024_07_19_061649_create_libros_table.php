<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('libroID');
            $table->string('isbn');
            $table->string('codigo');
            $table->string('titulo');
            $table->integer('aniopublicacion');
            $table->integer('ejemplaresdisponibles');
            $table->string('edicion');
            $table->integer('numeropaginas');
            $table->string('estadolibro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
