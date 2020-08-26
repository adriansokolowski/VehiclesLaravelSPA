<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TypPojazdu;
use Faker\Generator as Faker;

$factory->define(TypPojazdu::class, function (Faker $faker) {
    return [
        'typ' => $faker->name
    ];
});
