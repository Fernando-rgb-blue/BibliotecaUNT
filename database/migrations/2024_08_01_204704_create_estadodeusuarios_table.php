<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadodeusuariosTable extends Migration
{
    public function up()
    {
        Schema::create('estadodeusuarios', function (Blueprint $table) {
            $table->id();
            $table->string('tipoEstado', 255);
            $table->mediumText('descripcion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estadodeusuarios');
    }
}
