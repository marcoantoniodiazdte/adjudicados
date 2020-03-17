<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->enum('tipo_oferta',['exclusiva','normal'])->default('normal');
            $table->string('titulo');
            $table->decimal('precio_oferta',13,2);
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->enum('tipo_oferta',['exclusiva','normal'])->default('normal');
            $table->string('titulo');
            $table->decimal('precio_oferta',13,2);
        });
    }

    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn('tipo_oferta');
            $table->dropColumn('titulo');
            $table->dropColumn('precio_oferta');
        });

        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('tipo_oferta');
            $table->dropColumn('titulo');
            $table->dropColumn('precio_oferta');
        });
    }
}
