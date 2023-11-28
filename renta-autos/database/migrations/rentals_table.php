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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('Vehicles_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            // Definir restricciones de clave externa
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Vehicles_id')->references('id')->on('Vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
