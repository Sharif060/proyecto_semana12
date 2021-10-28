<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Citas;
use Faker\Generator as Faker;

$factory->define(Citas::class, function (Faker $faker) {

    return [
        'idpaciente' => $faker->randomDigitNotNull,
        'fecha' => $faker->word,
        'id_doctor' => $faker->randomDigitNotNull
    ];
});
