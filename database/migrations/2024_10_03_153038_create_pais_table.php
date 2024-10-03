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
        Schema::create('pais', function (Blueprint $table) {
            $table->id('pais_cod');
            $table->string('pais_descripcion');
            $table->string('pais_gentilicio');
            $table->string('pais_siglas');
            $table->unsignedBigInteger('nacion_cod')->nullable();
            $table->timestamps();

            $table->foreign('nacion_cod')->references('nacion_cod')->on('nacionalidad')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pais');
    }
};
