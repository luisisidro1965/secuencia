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
        Schema::create('progedu', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('area')->nullable();
            $table->string('nivel'); //TSU +o Ingneriría +o Licenciatura
            $table->foreignId('familia_id')->constrained('familias');
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
        Schema::dropIfExists('progedu');
    }
};
