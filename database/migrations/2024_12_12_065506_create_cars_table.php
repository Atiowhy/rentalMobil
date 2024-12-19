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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('car_name');
            $table->string('mileage');
            $table->string('transmition');
            $table->string('lugage');
            $table->text('feature');
            $table->string('color');
            $table->string('seats');
            $table->year('year');
            $table->string('fuel');
            $table->text('description');
            $table->tinyInteger('status');
            $table->string('foto');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};