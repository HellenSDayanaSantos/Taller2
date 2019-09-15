<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Farmaco;
use App\Models\Laboratorio;
use Faker\Generator as Faker;

$factory->define(App\Models\Farmaco::class, function (Faker $faker) {
    return [   
         'nombre' => $faker->name,
         'laboratorio_id' => function () {
        	return factory(App\Models\Laboratorio::class)->create()->id;
        }
       
    ];
});
