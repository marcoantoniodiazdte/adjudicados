<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCodigoFieldToTables extends Migration
{
    public function up()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->string('codigo_referencia');
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->string('codigo_referencia');
        });

        Schema::table('vehiculos', function (Blueprint $table) {
            $table->string('codigo_referencia');
        });

    }


    public function down()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('codigo_referencia');
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('codigo_referencia');
        });
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn('codigo_referencia');
        });

    }
}
