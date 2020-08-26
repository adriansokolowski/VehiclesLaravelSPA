<?php

use Illuminate\Database\Seeder;

class PracownicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pracownik::class, 10)->create();
    }
}
