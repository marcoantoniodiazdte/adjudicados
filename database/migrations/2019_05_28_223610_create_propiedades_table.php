<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('clase',['venta','alquiler']);
            $table->enum('categoria',['residencial','comercial']);
            $table->enum('disponibilidad',['true','false']);
            $table->text('descripcion');
            $table->string('sector', 100);
            $table->string('ciudad', 100);
            $table->string('direccion');
            $table->enum('tipo_oferta',['exclusiva','normal']);
            $table->double('precio_us');
            $table->double('precio_rd');
            $table->string('slug');




            $table->unsignedBigInteger('company_id');
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
        Schema::dropIfExists('propiedades');
    }
}
