<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Area;
use App\Models\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    $areas = Area::all();
    $azar = $faker->numberBetween($min = 0, $max = 19); 
    return [
        'id'            => $faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'nombre'        => $faker->name,
        'email'         => $faker->unique()->safeEmail,
        'sexo'          => $faker->randomElement($array = array ('M','F')),
        'area_id'       => $areas[$azar]->id,
        'boletin'       => $faker->numberBetween($min = 0, $max = 1),
        'descripcion'   => $faker->text($maxNbChars = 80),
    ];
});
