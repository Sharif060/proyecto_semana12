<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita_detalles;
use Faker\Generator as Faker;

$factory->define(Cita_detalles::class, function (Faker $faker) {

    return [
        'idcitas' => $faker->randomDigitNotNull
    ];
});
