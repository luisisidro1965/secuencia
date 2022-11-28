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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('saber');
            $table->string('saber_hacer');
            $table->string('ser');
            $table->unsignedTinyInteger('horas_t');
            $table->unsignedTinyInteger('horas_p');
            $table->date('fecha_inicio');
            $table->unsignedTinyInteger('tiempo_estimado');
            $table->text('competencia');
            $table->foreignId('unidad_id')->constrained('unidades')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('temas');
    }
};
