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
            $table->string('suc_telef', 20);
            $table->string('suc_direccion', 50);
            $table->string('suc_correo', 50);
            $table->string('suc_razon_social', 50);
            $table->unsignedBigInteger('emp_cod');
            $table->timestamps();

            $table->foreign('emp_cod')->references('emp_cod')->on('empresa')->onUpdate('cascade')->onDelete('cascade');
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
