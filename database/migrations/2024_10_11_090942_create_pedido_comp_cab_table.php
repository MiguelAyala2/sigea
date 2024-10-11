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
        Schema::create('pedido_comp_cab', function (Blueprint $table) {
            $table->id('ped_com_cod');
            $table->unsignedBigInteger('suc_cod');
            $table->unsignedBigInteger('emp_cod');
            $table->date('ped_com_fecha');
            $table->enum('ped_com_estado', ['Pendiente', 'Revisado', 'Rechazado', 'Aprobado']);
            $table->unsignedBigInteger('fun_cod');
            $table->timestamps();

            $table->foreign('suc_cod')->references('suc_cod')->on('sucursal')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('emp_cod')->references('emp_cod')->on('empresa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fun_cod')->references('fun_cod')->on('funcionario')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_comp_cab');
    }
};
