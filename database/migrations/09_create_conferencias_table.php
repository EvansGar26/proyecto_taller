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
        Schema::create('conferencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->enum('estado', ['A', 'R', 'C']);
            $table->string('tema',100);
            $table->text('descripcion_tema');
            $table->string('expositor',80);
            $table->text('descripcion_expositor');
            $table->string('ciclo_escolar',80);
            $table->string('url',80);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferencias');
    }
};
