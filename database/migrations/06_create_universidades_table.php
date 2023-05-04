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
        Schema::create('universidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_municipio')->references('id')->on('municipios');
            $table->string('nombre',80);
            $table->string('director',80);
            $table->string('direccion',80);
            $table->string('cp',80);
            $table->string('telefono',80);
            $table->string('logotipo',80);
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
        Schema::dropIfExists('universidades');
    }
};
