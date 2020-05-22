<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->decimal('monto',13,2)->default(0);
            $table->decimal('monto_oferta',13,2)->default(0);
            $table->enum('moneda',['RD','USD','EUR']);
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->decimal('monto',13,2)->default(0);
            $table->decimal('monto_oferta',13,2)->default(0);
            $table->enum('moneda',['RD','USD','EUR']);
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->decimal('monto',13,2)->default(0);
            $table->decimal('monto_oferta',13,2)->default(0);
            $table->enum('moneda',['RD','USD','EUR']);
        });

        Schema::table('propiedades', function (Blueprint $table) {
            $table->decimal('monto',13,2)->default(0);
            $table->decimal('monto_oferta',13,2)->default(0);
            $table->enum('moneda',['RD','USD','EUR']);
        });

        Schema::table('proyectos', function (Blueprint $table) {
            $table->decimal('monto',13,2)->default(0);
            $table->decimal('monto_oferta',13,2)->default(0);
            $table->enum('moneda',['RD','USD','EUR']);
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
            $table->dropColumn('monto');
            $table->dropColumn('monto_oferta');
            $table->dropColumn('moneda');
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('monto');
            $table->dropColumn('monto_oferta');
            $table->dropColumn('moneda');
        });

        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('monto');
            $table->dropColumn('monto_oferta');
            $table->dropColumn('moneda');
        });

        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropColumn('monto');
            $table->dropColumn('monto_oferta');
            $table->dropColumn('moneda');
        });

        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('monto');
            $table->dropColumn('monto_oferta');
            $table->dropColumn('moneda');
        });
    }
}
