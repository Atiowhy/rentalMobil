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
         Schema::create('detail_trans_orders', function (Blueprint $table) {
              $table->id();
            $table->unsignedBigInteger('id_trans_order');
            $table->foreign('id_trans_order')->references('id')->on('trans_orders')->onDelete('cascade');
            $table->unsignedBigInteger('id_car');
            $table->foreign('id_car')->references('id')->on('cars')->onDelete('cascade');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_trans_orders');
    }
};