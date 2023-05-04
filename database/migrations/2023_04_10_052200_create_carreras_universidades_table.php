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
        Schema::create('carreras_universidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_carrera')->references('id')->on('carreras');
            $table->foreignId('id_universidad')->references('id')->on('universidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras_universidades');
    }
};
