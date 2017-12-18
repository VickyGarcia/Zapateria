<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('existencia');
            $table->unsignedInteger('id_zapato');
            $table->foreign('id_zapato')->references('id')->on('shoes');
            $table->unsignedInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('types');
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
        Schema::dropIfExists('shoe_type');
    }
}
