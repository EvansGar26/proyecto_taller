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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',80);
            $table->string('ap_pat',80);
            $table->string('ap_mat',80);
            $table->string('email',80);
            $table->string('telefono',20);
            $table->string('direccion',80);
            $table->foreignId('id_municipio')->references('id')->on('municipios');
            $table->foreignId('id_rol')->references('id')->on('roles');
            $table->string('colonia',80);
            $table->integer('cp');
            $table->date('fecha_naci');
            $table->string('username',80);
            $table->string('password',80);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
