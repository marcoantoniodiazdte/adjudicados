<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOportunidadIdToEstadosEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estados_eventos', function (Blueprint $table) {
            $table->bigInteger('oportunidad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estados_eventos', function (Blueprint $table) {
            $table->dropColumn('oportunidad_id');
        });
    }
}
