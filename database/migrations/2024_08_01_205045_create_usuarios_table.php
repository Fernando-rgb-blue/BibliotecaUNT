<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 25)->nullable();
            $table->string('apellidos', 25)->nullable();
            $table->integer('dni');
            $table->foreignId('idTipoUsuario')->constrained('tipodeusuarios');
            $table->foreignId('idTipoEstado')->constrained('estadodeusuarios');
            $table->integer('telefono');
            $table->string('domicilio', 50);
            $table->string('email', 20);
            $table->date('fechaNacimiento');
            $table->integer('reservasActivas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
