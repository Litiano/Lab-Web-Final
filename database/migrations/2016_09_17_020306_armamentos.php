<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Armamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('armamentos', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('reserva_id');
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->string('numero_serie')->unique();
            $table->string('modelo');
            $table->string('fabricante');
            $table->boolean('disponivel')->default('0');
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
        \Schema::dropIfExists('armamentos');
    }
}
