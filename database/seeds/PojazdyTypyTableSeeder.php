<?php

use Illuminate\Database\Seeder;

class PojazdyTypyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TypPojazdu::class, 10)->create();
    }
}
