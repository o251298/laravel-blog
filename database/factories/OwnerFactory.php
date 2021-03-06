<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'phone_id' => $faker->randomNumber(1, 5),
        'owner_name' => $faker->userName
    ];
});
