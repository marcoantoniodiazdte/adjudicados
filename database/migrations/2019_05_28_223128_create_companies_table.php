<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique()->nullable();
            $table->string('RNC')->unique()->nullable();
            $table->string('razon_social')->unique()->nullable();
            $table->string('direccion')->unique()->nullable();

            $table->string('nombres_principal')->unique()->nullable();
            $table->string('apellidos_principal')->unique()->nullable();
            $table->string('telefono_principal')->unique()->nullable();
            $table->string('correos_principal')->unique()->nullable();

            $table->string('nombres_secundario')->unique()->nullable();
            $table->string('apellidos_secundario')->unique()->nullable();
            $table->string('telefono_secundario')->unique()->nullable();
            $table->string('correos_secundario')->unique()->nullable();

            $table->enum('active',['true','false'])->default('true');
            $table->enum('company_type',['inmobiliaria','agencia'])->nullable();

            $table->string('description');

            $table->timestamps();
        });

        Schema::create('company_module', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('module_id');

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
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_module');
    }
}
