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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->id('suc_cod');
            $table->unsignedBigInteger('emp_cod');
            $table->string('suc_direcc');
            $table->string('suc_correo');
            $table->string('suc_telefono');
            $table->string('suc_razonsocial');
            $table->timestamps();

            $table->foreign('emp_cod')->references('emp_cod')->on('empresa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursal');
    }
};
