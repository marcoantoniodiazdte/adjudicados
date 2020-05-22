<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertFieldsToEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estados', function (Blueprint $table) {
            $table->string('color');
            $table->string('color_letra');
            $table->boolean('notificacion')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estados', function (Blueprint $table) {
            $table->dropColumn('color');
            $table->dropColumn('color_letra');
            $table->dropColumn('notificacion');
        });
    }
}
