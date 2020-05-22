<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario_id');
            $table->bigInteger('anuncio_id');
            $table->decimal('monto',13,2)->default(0);
            $table->dateTime('fecha');
            $table->dateTime('fecha_eliminacion')->nullable();
            $table->boolean('favorito')->default(0);
            $table->enum('tipo', ['propiedad','vehiculo','obra','equipo', 'proyecto'])->default('propiedad');
            $table->enum('estado', ['enviada', 'analisis','cancelada'])->default('enviada');
        });
    }


    public function down()
    {
        Schema::dropIfExists('oportunidades');
    }
}