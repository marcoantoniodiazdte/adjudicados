<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_propiedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propiedad_id');
            $table->unsignedBigInteger('tipos_caracteristica_id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('tipos_caracteristicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->string('nombre_tipo');
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
        Schema::dropIfExists('caracteristicas_propiedades');
        Schema::dropIfExists('tipos_caracteristicas');
    }
}
