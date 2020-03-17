<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->decimal('precio_oferta_rd', 13,2)->default(0.00);
            $table->decimal('precio_oferta_usd', 13,2)->default(0.00);
            $table->decimal('precio_oferta_eu', 13,2)->default(0.00);
            $table->string('codigo_referencia');
            $table->string('mapa_url')->nullable();
            $table->bigInteger('habitaciones')->default(0);
            $table->bigInteger('banos')->default(0);
            $table->decimal('area')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->dropColumn('precio_oferta_rd');
            $table->dropColumn('precio_oferta_eu');
            $table->dropColumn('precio_oferta_usd');
            $table->dropColumn('codigo_referencia');
            $table->dropColumn('habitaciones');
            $table->dropColumn('banos');
            $table->dropColumn('area');
            $table->dropColumn('mapa_url');
        });
    }
}
