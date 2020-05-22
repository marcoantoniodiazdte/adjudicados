<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmobiliariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmobiliarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('rnc');
            $table->string('correo');
            $table->string('direccion');
            $table->bigInteger('codigo_referencia')->nullable();
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
        Schema::dropIfExists('inmobiliarias');
    }
}
