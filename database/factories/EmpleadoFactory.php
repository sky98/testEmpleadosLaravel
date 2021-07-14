<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empleado;
use App\Models\Area;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    $area = Area::find($faker->numberBetween($min = 1, $max = 20));
    return [
        'id'            => $faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'nombre'        => $fake->name,
        'email'         => $faker->unique()->safeEmail,
        'sexo'          => $faker->randomElement($array = array ('M','F')),
        'area_id'       => $area->id,
        'boletin'       => $faker->numberBetween($min = 0, $max = 1),
        'description'   => $faker->text($maxNbChars = 80),
    ];
});
