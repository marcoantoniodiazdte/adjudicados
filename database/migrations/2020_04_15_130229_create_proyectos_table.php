<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('estado', ['disponible', 'construccion', 'contrato','vendido']);
            $table->string('direccion');
            $table->string('area');
            $table->text('descripcion');
            $table->enum('tipo_oferta', ['exclusiva','normal']);
            $table->decimal('precio_us',13,2);
            $table->decimal('precio_rd',13,2);
            $table->decimal('precio_eur',13,2);
            $table->decimal('precio_oferta_us',13,2);
            $table->decimal('precio_oferta_rd',13,2);
            $table->decimal('precio_oferta_eu',13,2);
            $table->enum('mostrar_precio', ['DOP','USD','EUR']);
            $table->enum('estado_publicacion', ['activo', 'inactivo']);
            $table->bigInteger('inmobiliaria_id');
            $table->bigInteger('provincia_id');
            $table->bigInteger('municipio_id');
            $table->bigInteger('sector_id');
            $table->string('codigo_referencia');
            $table->text('mapa_url');
            $table->bigInteger('habitaciones');
            $table->bigInteger('tipo_id');

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
        Schema::dropIfExists('proyectos');
    }
}
