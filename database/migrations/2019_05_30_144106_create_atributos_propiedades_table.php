<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributosPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos_propiedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propiedad_id');
            $table->unsignedBigInteger('tipo_atributo_id');
            $table->integer('valor');
            $table->integer('unidad');
            $table->timestamps();
        });

        Schema::create('tipos_atributos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icono');
            $table->string('nombre');
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
        Schema::dropIfExists('atributos_propiedades');
        Schema::dropIfExists('tipos_atributos');
    }
}
