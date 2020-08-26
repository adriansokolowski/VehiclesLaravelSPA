<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePojazdyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojazdy', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa')->nullable();
            $table->string('nr_rejestracyjny')->nullable();
            $table->string('id_ubezpieczenia')->nullable();
            $table->date('ubezpieczenie_od')->nullable();
            $table->date('ubezpieczenie_do')->nullable();
            $table->string('umowa_leasingu')->nullable();
            $table->date('data_badania_technicznego')->nullable();
            $table->string('id_uzytkownika')->nullable();
            $table->string('id_kto_dodal')->nullable();
            $table->dateTime('data_czas_dodania')->nullable();
            $table->string('usuniete')->nullable();
            $table->string('id_typu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pojazdy');
    }
}
