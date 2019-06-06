<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_propiedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_archivo');
            $table->string('ubicacion');
            $table->enum('clase_archivo',['galeria']);
            $table->unsignedBigInteger('propiedad_id');
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
        Schema::dropIfExists('archivos_propiedades');
    }
}
