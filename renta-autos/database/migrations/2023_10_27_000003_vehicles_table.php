<?php

use App\Models\Brands;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->year('año');
            $table->string('color');


            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
