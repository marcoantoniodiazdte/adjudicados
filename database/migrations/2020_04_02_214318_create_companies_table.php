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
            $table->bigInteger('codigo');
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

