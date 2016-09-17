<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cautelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('cautelas', function (Blueprint $table){
            $table->increments('id');
            $table->integer('militar_id')->unsigned();
            $table->foreign('militar_id')->references('id')->on('militares')->onDelete('cascade');
            $table->boolean('finalizada')->default('0');
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
        \Schema::dropIfExists('cautelas');
    }
}
