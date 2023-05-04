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
        Schema::create('universidades_imagenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_universidad')->references('id')->on('universidades')->onDelete('cascade');
            $table->string('ruta',80);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universidades_imagenes');
    }
};
