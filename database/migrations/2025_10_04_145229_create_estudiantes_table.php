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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 21)->nullable();
            $table->string('nombres', 120);
            $table->string('pri_ape', 120);
            $table->string('seg_ape', 100);
            $table->string('dni', 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
