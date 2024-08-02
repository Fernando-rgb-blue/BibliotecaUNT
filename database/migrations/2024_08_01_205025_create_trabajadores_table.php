<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30)->nullable();
            $table->string('inicioTurno', 30);
            $table->string('finTurno', 30);
            $table->foreignId('idTipoUsuario')->constrained('tipodeusuarios');
            $table->foreignId('idTipoEstado')->constrained('estadodeusuarios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
}
