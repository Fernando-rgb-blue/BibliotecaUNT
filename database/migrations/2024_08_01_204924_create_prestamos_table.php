<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idLibro')->constrained('libros');
            $table->foreignId('idUsuario')->constrained('usuarios');
            $table->foreignId('idTrabajador')->constrained('trabajadores');
            $table->date('fechaSalida');
            $table->date('fechaMaxDevolucion');
            $table->date('fechaDevolucion');
            $table->string('estadoDevolucion', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
