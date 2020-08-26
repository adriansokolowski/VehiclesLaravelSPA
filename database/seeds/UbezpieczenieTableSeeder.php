<?php

use Illuminate\Database\Seeder;

class UbezpieczenieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ubezpieczenie::class, 10)->create();
    }
}
