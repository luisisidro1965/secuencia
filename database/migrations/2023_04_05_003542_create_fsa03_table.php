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
        Schema::create('fsa03', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); //Coordinador
            $table->unsignedTinyInteger('cuatrimestre');
            $table->string('grupo');
            $table->date('periodo'); //Ene-Abr 2021, Mayo-Ago 2023, Sep-Dic 2023
            $table->date('fecha_entrega');
            $table->enum('status', ['Programada', 'En curso', 'Finalizada']);
            $table->enum('visible', ['On', 'Off']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fsa03');
    }
};
