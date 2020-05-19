<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'firstName'=>$faker->firstName(),
        'lastName'=>$faker->lastName(),
        'driverCode'=> $faker->randomElement(['AA','AB','AC','BB','BC','CC','ZZ'])
    ];
});
