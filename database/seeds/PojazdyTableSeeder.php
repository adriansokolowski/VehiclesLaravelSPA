<?php

use Illuminate\Database\Seeder;

class PojazdyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pojazd::class, 100)->create();
    }
}
