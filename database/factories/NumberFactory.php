<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Number;
use Faker\Generator as Faker;

$factory->define(Number::class, function (Faker $faker) {
    return [
        'number' => $faker->phoneNumber,
        'phone_id' => $faker->randomNumber(1, 10),
    ];
});
