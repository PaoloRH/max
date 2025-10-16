<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->string('materia');
            $table->float('nota');
            $table->timestamps();

            // Clave foránea
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
