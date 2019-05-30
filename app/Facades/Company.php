<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Company extends Facade
{
    /**
     * Devuelve una instancia de la
     * clase Core (Components)
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'company';
    }
}