<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_sale', function (Blueprint $table) {
            $table->increments('id');
            $table->float('precio_venta');
            $table->integer('cantidad');
            $table->unsignedInteger('id_zapato');
            $table->foreign('id_zapato')->references('id')->on('shoes');
            $table->unsignedInteger('id_venta');
            $table->foreign('id_venta')->references('id')->on('sales');
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
        Schema::dropIfExists('shoe_sale');
    }
}
