<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productNumber' => $faker->unique()->randomNumber($nbDigits=4, $strict = false),
        'name' => $faker->word()
    ];
});
