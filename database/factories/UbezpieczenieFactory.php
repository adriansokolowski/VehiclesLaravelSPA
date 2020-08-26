<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ubezpieczenie;
use Faker\Generator as Faker;

$factory->define(Ubezpieczenie::class, function (Faker $faker) {
    return [
        'nazwa' => $faker->name
    ];
});
