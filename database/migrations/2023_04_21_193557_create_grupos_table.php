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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('progedu_id')->constrained('progedu');
            $table->string('periodo', 30);
            $table->unsignedTinyInteger('cuatrimestre');
            $table->string('código', 5);
            $table->unsignedTinyInteger('total_alumnos');
            $table->unsignedTinyInteger('total_mujeres');
            $table->unsignedTinyInteger('total_deserción');
            $table->unsignedTinyInteger('total_reprobados');
            $table->string('edo', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
