<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pojazd extends Model
{
    protected $guarded = [];
    protected $table = 'pojazdy';
    public $timestamps = false;
    
    public function typ()
    {
        return $this->hasOne(TypPojazdu::class, 'id_typu');
    }

    public function ubezpieczenie(){
        return $this->hasOne(Ubezpieczenie::class, 'id_ubezpieczenia');
    }

    public function pracownik()
    {
        return $this->hasOne(Pracownik::class, 'id_kto_dodal');
    }
    
}
