<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CautelasItens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('cautelas_itens', function (Blueprint $table){
            $table->increments('id');
            $table->integer('cautela_id')->unsigned();
            $table->foreign('cautela_id')->references('id')->on('cautelas')->onDelete('cascade');
            $table->unsignedInteger('item_id');
            $table->string('descricao');
            $table->integer('quantidade_solicitada');
            $table->integer('quantidade_devolvida')->default('0');
            $table->string('tipo');
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
        \Schema::dropIfExists('cautelas_itens');
    }
}
