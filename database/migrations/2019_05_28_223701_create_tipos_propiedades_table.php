<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_propiedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('propiedades_tipos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('propiedades_id');
            $table->unsignedBigInteger('tipos_propiedades_id');

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
        Schema::dropIfExists('tipos_propiedades');
        Schema::dropIfExists('propiedades_tipos');
    }
}
