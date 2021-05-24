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
            $table->enum('estado',['disponible','construccion','contrato','vendido']);
            $table->enum('clase',['proyecto','propiedad']);
            $table->enum('estado_comercial',['venta','alquiler']);
            //$table->enum('categoria',['residencial','comercial']);
          //  $table->date('fecha_disponbible');
            $table->text('direccion');
            $table->text('descripcion');
            $table->enum('tipo_oferta',['exclusiva','normal']);
            $table->decimal('precio_us',13,2);
            $table->decimal('precio_rd',13,2);
            $table->decimal('precio_eur',13,2);
            $table->enum('mostrar_precio', ['DOP','USD','EUR']);
            $table->enum('estado_publicacion',['activo','inactivo'])->default('inactivo');
            $table->string('slug');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('platilla_id')->nullable();

            $table->unsignedBigInteger('provincia_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('sector_id');
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
