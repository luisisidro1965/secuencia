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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignatura_id')->constrained('asignaturas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nombre', 100);
            $table->string('objetivo');
            $table->string('tarea_integradora');
            $table->unsignedTinyInteger('horas_t');
            $table->unsignedTinyInteger('horas_p');
            $table->date('fecha_entrega');
            $table->string('material_didactico');
            $table->string('instrumento_evaluación');
            $table->string('herramientas_didacticas');
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
        Schema::dropIfExists('unidades');
    }
};
