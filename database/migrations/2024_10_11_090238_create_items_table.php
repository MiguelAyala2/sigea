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
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_cod');
            $table->unsignedBigInteger('tip_items_cod');
            $table->unsignedBigInteger('tip_imp_cod');
            $table->string('item_descrip');
            $table->integer('item_precio');
            $table->enum('estado', ['Estado A', 'Estado B', 'Estado C']);
            $table->timestamps();

            $table->foreign('tip_items_cod')->references('tip_items_cod')->on('tipo_items')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tip_imp_cod')->references('tip_imp_cod')->on('tipo_impuesto')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
