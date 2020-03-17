<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTipoIdToPropiedadesTable extends Migration
{

    public function up()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->bigInteger('tipo_id');
        });
    }


    public function down()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropColumn('tipo_id');
        });
    }
}
