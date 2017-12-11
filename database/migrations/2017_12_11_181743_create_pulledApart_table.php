<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePulledApartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulledApart', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_apartado');
            $table->date('fecha_limite');
            $table->float('pago_ini');
            $table->text('desc');
            $table->unsignedInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('customers');
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
        Schema::dropIfExists('pulledApart');
    }
}
