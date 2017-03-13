<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalibracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idNumero')->unsigned()->nullable();
            $table->foreign('idNumero')->references('id')->on('numeros')->onDelete('cascade');
            $table->date('fecha_solicitud');
            $table->integer('idUsuario')->unsigned()->nullable();
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('idCliente')->unsigned()->nullable();
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->string('comuna_servicio');
            $table->string('lugar_servicio');
            $table->mediumText('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calibraciones');
    }
}
