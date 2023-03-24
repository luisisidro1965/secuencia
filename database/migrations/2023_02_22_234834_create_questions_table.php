<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->date('fecha_creación');
            $table->string('periodo');
            $table->date('inicia_en');
            $table->date('termina_en');
            $table->unsignedMediumInteger('total')->nullable();
            $table->enum('progedu', ['TI', 'CTD', 'MEC', 'MID', 'MKT', 'ENR']);
            $table->unsignedMediumInteger('Matricula')->nullable();
            $table->boolean('mostrar')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
