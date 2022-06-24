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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('objetivo');
            $table->text('competencia');
            $table->foreignId('carrera_id')->constrained('carreras')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedTinyInteger('cuatrimestre');
            $table->unsignedTinyInteger('horas_t');
            $table->unsignedTinyInteger('horas_p');
            $table->unsignedTinyInteger('unidades');

            $table->foreignId('area_id')->constrained('areas')  //area_conocimiento
                ->nullable()
                ->onDelte('set null'); //area del conocimiento
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
        Schema::dropIfExists('asignaturas');
    }
};
