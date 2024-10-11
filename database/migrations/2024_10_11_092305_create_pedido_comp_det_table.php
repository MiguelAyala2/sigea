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
        Schema::create('pedido_comp_det', function (Blueprint $table) {
            $table->unsignedBigInteger('ped_com_cod');
            $table->unsignedBigInteger('item_cod');
            $table->integer('ped_com_cantidad');
            $table->integer('ped_com_precio');
            $table->timestamps();

            $table->foreign('ped_com_cod')->references('ped_com_cod')->on('pedido_comp_cab')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('item_cod')->references('item_cod')->on('items')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_comp_det');
    }
};
