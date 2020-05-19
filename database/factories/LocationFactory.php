<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'address'=>$faker->streetAddress(),
        'city'=>$faker->city(),
        'postCode'=>$faker->postcode(),
        'country'=>$faker->country()
    ];
});
