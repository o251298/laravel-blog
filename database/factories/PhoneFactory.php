<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber(1, 5),
        'phone' => $faker->country
    ];
});
