<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalePulledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_pulled', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->unsignedInteger('id_venta');
            $table->foreign('id_venta')->references('id')->on('sales');
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
        Schema::dropIfExists('sale_pulled');
    }
}
