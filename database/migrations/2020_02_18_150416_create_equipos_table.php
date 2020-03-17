<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->bigInteger('tipo_id')->default(0);
            $table->decimal('precio',13,2);
            $table->enum('tipo_oferta',['exclusiva','normal'])->default('normal');
            $table->string('titulo');
            $table->decimal('precio_oferta',13,2);
            $table->decimal('precio_usd',13,2);
            $table->decimal('precio_eu',13,2);
            $table->decimal('precio_oferta_usd',13,2);
            $table->decimal('precio_oferta_eu',13,2);
            $table->decimal('precio_oferta_rd',13,2)->nullable();
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
        Schema::dropIfExists('equipos');
    }
}
