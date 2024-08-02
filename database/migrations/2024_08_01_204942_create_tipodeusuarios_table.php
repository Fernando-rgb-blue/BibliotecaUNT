<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipodeusuariosTable extends Migration
{
    public function up()
    {
        Schema::create('tipodeusuarios', function (Blueprint $table) {
            $table->id();
            $table->string('tipoUsuario', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipodeusuarios');
    }
}
