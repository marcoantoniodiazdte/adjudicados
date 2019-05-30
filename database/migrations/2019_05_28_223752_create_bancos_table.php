<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('short_name');
            $table->timestamps();
        });

        Schema::create('banco_company', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('banco_id');

            $table->string('numero_cuenta');
            $table->enum('tipo_cuenta',['ahorros','corriente']);
            $table->enum('tipo_moneda',['USD','DOP']);


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
        Schema::dropIfExists('bancos');
        Schema::dropIfExists('banco_company');
    }
}
