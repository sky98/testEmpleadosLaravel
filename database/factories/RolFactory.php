<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'id'        => $faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'nombre'    => $faker->name,
    ];
});
