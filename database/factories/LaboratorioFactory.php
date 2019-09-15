<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Laboratorio;
use Faker\Generator as Faker;

$factory->define(App\Models\Laboratorio::class, function (Faker $faker) {
    return [   
        'nombre'=>$faker->name,
        'datos' => [
           "direccion" => $faker->address,
           "ubicacion" => $faker->city
        ]
    ];
   
});
