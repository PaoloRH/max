<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->decimal('participacion', 5, 2)->nullable();
            $table->decimal('habilidades', 5, 2)->nullable();
            $table->decimal('asistencia', 5, 2)->nullable();
            $table->decimal('video_test_1', 5, 2)->nullable();
            $table->decimal('video_test_2', 5, 2)->nullable();
            $table->decimal('video_test_3', 5, 2)->nullable();
            $table->decimal('video_test_4', 5, 2)->nullable();
            $table->decimal('parcial_1', 5, 2)->nullable();
            $table->decimal('parcial_2', 5, 2)->nullable();
            $table->decimal('parcial_3', 5, 2)->nullable();
            $table->decimal('parcial_4', 5, 2)->nullable();
            $table->decimal('entregable', 5, 2)->nullable();
            $table->decimal('examen_final', 5, 2)->nullable();
            $table->decimal('promedio_final', 5, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropColumn([
                'participacion', 'habilidades', 'asistencia',
                'video_test_1', 'video_test_2', 'video_test_3', 'video_test_4',
                'parcial_1', 'parcial_2', 'parcial_3', 'parcial_4',
                'entregable', 'examen_final', 'promedio_final'
            ]);
        });
    }
};
