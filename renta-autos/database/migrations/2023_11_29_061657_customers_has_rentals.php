<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('rentals', function (Blueprint $table) {
        $table->unsignedBigInteger('customer_id');

        // Definir restricciones de clave externa
        $table->foreign('customer_id')->references('id')->on('customers');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
