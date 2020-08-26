<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PracownicyTableSeeder::class);
        $this->call(PojazdyTableSeeder::class);
        $this->call(PojazdyTypyTableSeeder::class);
        $this->call(UbezpieczenieTableSeeder::class);
    }
}
