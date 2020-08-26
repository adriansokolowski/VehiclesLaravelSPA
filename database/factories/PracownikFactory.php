<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pracownik;
use Faker\Generator as Faker;

$factory->define(Pracownik::class, function (Faker $faker) {
    return [
        'nazwa' => $faker->name
    ];
});
