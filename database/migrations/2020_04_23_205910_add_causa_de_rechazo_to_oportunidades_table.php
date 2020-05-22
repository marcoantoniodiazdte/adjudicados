<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCausaDeRechazoToOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oportunidades', function (Blueprint $table) {
            $table->text('causa_rechazo')->nullable();
            $table->dropColumn('estado');
            $table->bigInteger('estado_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oportunidades', function (Blueprint $table) {
            $table->dropColumn('causa_rechazo');
            $table->dropColumn('estado_id');
        });
    }
}
