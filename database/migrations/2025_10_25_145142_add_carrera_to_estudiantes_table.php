<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->string('carrera')->nullable(); // puedes cambiar nullable según necesidad
        });
    }

    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropColumn('carrera');
        });
    }
};
