<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'ape_nombre' => $faker->word,
        'dni' => $faker->randomDigitNotNull,
        'celular' => $faker->randomDigitNotNull
    ];
});
