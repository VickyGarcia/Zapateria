<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_line', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('existencia');
            $table->unsignedInteger('id_zapato');
            $table->foreign('id_zapato')->references('id')->on('shoes');
            $table->unsignedInteger('id_linea');
            $table->foreign('id_linea')->references('id')->on('lines');
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
        Schema::dropIfExists('shoe_line');
    }
}
