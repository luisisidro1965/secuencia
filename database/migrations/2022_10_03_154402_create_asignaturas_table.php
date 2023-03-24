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
            $table->enum('cuatrimestre', [0, 1, 2, 3, 4, 5, 7, 8, 9, 10]);
            $table->unsignedTinyInteger('ht');
            $table->unsignedTinyInteger('hp');
            $table->unsignedTinyInteger('htotales');
            $table->unsignedTinyInteger('htsemana');
            $table->string('objetivo');
            $table->foreignId('progedu_id')
                ->constrained('progedu')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
