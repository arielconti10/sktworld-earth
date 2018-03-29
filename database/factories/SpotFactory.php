<?php

use Faker\Generator as Faker;
use App\Spot;

$factory->define(Spot::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(20),
        'address' => $faker->streetAddress,
        'city_id' => $faker->city,
        'country_id' => $faker->randomNumber(2),
        'state_id' => $faker->randomNumber(2),
        'lat' => '',
        'long' =>'',
        'rate' =>'',
    ];
});
