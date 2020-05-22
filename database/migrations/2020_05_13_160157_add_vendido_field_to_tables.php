<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVendidoFieldToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->boolean('vendido')->default(0);
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->boolean('vendido')->default(0);
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->boolean('vendido')->default(0);
        });

        Schema::table('propiedades', function (Blueprint $table) {
            $table->boolean('vendido')->default(0);
        });

        Schema::table('proyectos', function (Blueprint $table) {
            $table->boolean('vendido')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn('vendido');
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('vendido');
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('equipos');
        });

        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropColumn('vendido');
        });

        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('vendido');
        });

    }
}
