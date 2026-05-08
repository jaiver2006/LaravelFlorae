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
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();
            $table->id('plant_id');
            $table->string('PlantName');
            $table->string('PlantDescription');
            $table->string('PlantStatus');
            $table->string('PlantCare');
            $table->string('PlantCare');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
