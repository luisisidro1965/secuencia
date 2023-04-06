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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('descripcion');
            $table->date('fecha');
            $table->string('observaciones');
            $table->enum('status', ['Pendiente', 'En curso', 'Finalizada', 'Cancelada']);
            $table->foreignId('fsa03_id')->constrained('fsa03');
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
        Schema::dropIfExists('actividades');
    }
};
