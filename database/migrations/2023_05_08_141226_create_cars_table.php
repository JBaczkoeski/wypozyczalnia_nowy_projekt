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
            $table->string('mark');
            $table->string('model');
            $table->date('year_of_production');
            $table->integer('price');
            $table->string('fuel_type');
            $table->bigInteger('power');
            $table->string('transmission_type');
            $table->integer('number_of_seat');
            $table->integer('number_of_door');
            $table->char('image');
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
