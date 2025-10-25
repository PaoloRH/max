<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->softDeletes(); // Esto crea deleted_at nullable
        });
    }

    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
};
