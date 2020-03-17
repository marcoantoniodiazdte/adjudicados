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
        Schema::table('obras', function (Blueprint $table) {
            $table->decimal('precio_usd',13,2)->default(0.00);
            $table->decimal('precio_eu',13,2)->default(0.00);
            $table->decimal('precio_oferta_usd',13,2)->default(0.00);
            $table->decimal('precio_oferta_eu',13,2)->default(0.00);
            $table->decimal('precio_oferta_rd',13,2)->default(0.00);
        });
        
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->decimal('precio_usd',13,2)->default(0.00);
            $table->decimal('precio_eu',13,2)->default(0.00);
            $table->decimal('precio_oferta_usd',13,2)->default(0.00);
            $table->decimal('precio_oferta_eu',13,2)->default(0.00);
            $table->decimal('precio_oferta_rd',13,2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('precio_usd');
            $table->dropColumn('precio_eu');
            $table->dropColumn('precio_oferta_usd');
            $table->dropColumn('precio_oferta_eu');
            $table->dropColumn('precio_oferta_rd');
        });

        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn('precio_usd');
            $table->dropColumn('precio_eu');
            $table->dropColumn('precio_oferta_usd');
            $table->dropColumn('precio_oferta_eu');
            $table->dropColumn('precio_oferta_rd');
        });
    }
}
