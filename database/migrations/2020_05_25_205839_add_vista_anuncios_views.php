<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddVistaAnunciosViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW vista_anuncios AS
        SELECT DISTINCT 'propiedad' AS `tipo`,`propiedades`.`id` AS `id_aux`,`propiedades`.`codigo_referencia` AS `referencia`,`propiedades`.`name` AS `nombre`,`propiedades`.`moneda` AS `moneda`,`propiedades`.`monto` AS `monto` FROM `propiedades` UNION ALL SELECT DISTINCT 'proyecto' AS `tipo`,`proyectos`.`id` AS `id`,`proyectos`.`codigo_referencia` AS `codigo_referencia`,`proyectos`.`name` AS `NAME`,`proyectos`.`moneda` AS `moneda`,`proyectos`.`monto` AS `monto` FROM `proyectos` UNION ALL SELECT DISTINCT 'vehiculo' AS `tipo`,`vehiculos`.`id` AS `id`,`vehiculos`.`codigo_referencia` AS `codigo_referencia`,`vehiculos`.`titulo` AS `NAME`,`vehiculos`.`moneda` AS `moneda`,`vehiculos`.`monto` AS `monto` FROM `vehiculos` UNION ALL SELECT DISTINCT 'obra' AS `tipo`,`obras`.`id` AS `id`,`obras`.`codigo_referencia` AS `codigo_referencia`,`obras`.`titulo` AS `NAME`,`obras`.`moneda` AS `moneda`,`obras`.`monto` AS `monto` FROM `obras` UNION ALL SELECT DISTINCT 'equipo' AS `tipo`,`equipos`.`id` AS `id`,`equipos`.`codigo_referencia` AS `codigo_referencia`,`equipos`.`titulo` AS `NAME`,`equipos`.`moneda` AS `moneda`,`equipos`.`monto` AS `monto` FROM `equipos`;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DELETE VIEW vista_anuncios");
    }
}
