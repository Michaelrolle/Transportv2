<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'refNumber'=>$faker->unique()->randomNumber($nbDigits=6, $strict = false),
        'quantity'=>$faker->numberBetween($min = 500, $max = 5000),
        'loadingNotes'=>$faker->text($maxNbChars = 50),
        'deliveryNotes'=>$faker->text($maxNbChars = 50),
        'loadingDateTime'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week', $timezone = null),
        'deliveryDateTime'=>$faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+1 month', $timezone = null),
        'loading_client_id'=>$faker->numberBetween($min = 1, $max = 10),
        'loading_location_id'=>$faker->numberBetween($min = 1, $max = 10),
        'delivery_client_id'=>$faker->numberBetween($min =1, $max =10),
        'delivery_location_id'=>$faker->numberBetween($min =1, $max =10),
        'product_id'=>$faker->numberBetween($min = 1, $max = 10),
        'metric_id'=>$faker->numberBetween($min = 1, $max = 4),
        'driver_id'=>$faker->numberBetween($min = 1, $max = 10),
    ];
});
