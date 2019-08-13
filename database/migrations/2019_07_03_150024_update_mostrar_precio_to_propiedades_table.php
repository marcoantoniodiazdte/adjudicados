<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMostrarPrecioToPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE propiedades MODIFY mostrar_precio ENUM('DOP','USD','EUR') NOT NULL");
        Schema::table('propiedades', function($table) {
            $table->decimal('precio_eur',13,2);
            // $table->enum('mostrar_precio', ['DOP','USD','EUR'])->change(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE propiedades MODIFY mostrar_precio ENUM('do','us') NOT NULL ");
        Schema::table('propiedades', function($table) {
            $table->dropColumn('precio_eur',13,2);
            // $table->enum('mostrar_precio', ['do','us'])->change();
        });
    }
}
