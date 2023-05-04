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
        Schema::table('carreras', function (Blueprint $table) {
            $table->text('objetivo')->change();
            $table->text('descripcion')->change();
            $table->text('perfil_ingreso')->change();
            $table->text('perfil_egreso')->change();
            $table->text('campo_laboral')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carreras', function (Blueprint $table) {
            //
        });
    }
};
