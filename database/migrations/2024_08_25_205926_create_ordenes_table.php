<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id('idOrdenes');
            $table->unsignedBigInteger('idClientes');
            $table->date('fecha');
            $table->string('metodoPago');
            $table->string('tipoFactura');
            $table->decimal('paymentAmount', 18, 2);

            $table->foreign('idClientes')->references('idClientes')->on('clientes')->onDelete('cascade');

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
        Schema::dropIfExists('ordenes');
    }
}
