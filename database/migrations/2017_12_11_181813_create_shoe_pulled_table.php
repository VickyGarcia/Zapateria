<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoePulledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_pulled', function (Blueprint $table) {
            $table->increments('id');
            $table->float('precio_venta');
            $table->integer('cantidad');
            $table->unsignedInteger('id_zapato');
            $table->foreign('id_zapato')->references('id')->on('shoes');
            $table->unsignedInteger('id_apartado');
            $table->foreign('id_apartado')->references('id')->on('pulled_apart');
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
        Schema::dropIfExists('shoe_pulled');
    }
}
