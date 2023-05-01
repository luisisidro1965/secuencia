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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutorado_id')->constrained('users');
            $table->date('fecha_llenado')->default(now());
            $table->enum('resp01', ['1', '2', '3', '4', '5']);
            $table->enum('resp02', ['1', '2', '3', '4', '5']);
            $table->enum('resp03', ['1', '2', '3', '4', '5']);
            $table->enum('resp04', ['1', '2', '3', '4', '5']);
            $table->enum('resp05', ['1', '2', '3', '4', '5']);
            $table->enum('resp06', ['1', '2', '3', '4', '5']);
            $table->enum('resp07', ['1', '2', '3', '4', '5']);
            $table->enum('resp08', ['1', '2', '3', '4', '5']);
            $table->enum('resp09', ['1', '2', '3', '4', '5']);
            $table->enum('resp10', ['1', '2', '3', '4', '5']);
            $table->enum('resp11', ['1', '2', '3', '4', '5']);
            $table->enum('resp12', ['1', '2', '3', '4', '5']);
            $table->enum('resp13', ['1', '2', '3', '4', '5']);
            $table->enum('resp14', ['1', '2', '3', '4', '5']);
            $table->enum('resp15', ['1', '2', '3', '4', '5']);
            $table->enum('resp16', ['1', '2', '3', '4', '5']);
            $table->enum('resp17', ['1', '2', '3', '4', '5']);

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
        Schema::dropIfExists('evaluaciones');
    }
};
