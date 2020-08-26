<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pojazd;
use Faker\Generator as Faker;


$factory->define(Pojazd::class, function (Faker $faker) {
    return [
        'nazwa' => $faker->name,
        'nr_rejestracyjny' => $faker->randomDigit,
        'id_ubezpieczenia' => $faker->randomDigit,
        'ubezpieczenie_od' => $faker->date,
        'ubezpieczenie_do' => $faker->date,
        'umowa_leasingu' => $faker->text(10),
        'data_badania_technicznego' => $faker->date,
        'id_uzytkownika' => $faker->randomDigit,
        'id_kto_dodal' => 1,
        'data_czas_dodania' => $faker->dateTime,
        'usuniete' => $faker->randomDigit,
        'id_typu' => $faker->randomDigit
    ];
});
