<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TiposPropiedades;
use Faker\Generator as Faker;

$factory->define(TiposPropiedades::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle
    ];
});
