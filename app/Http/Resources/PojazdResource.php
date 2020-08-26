<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PojazdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nazwa' => $this->nazwa,
            'nr_rejestracyjny' => $this->nr_rejestracyjny,
            'id_ubezpieczenia' => $this->id_ubezpieczenia,
            'ubezpieczenie_od' => $this->ubezpieczenie_od,
            'ubezpieczenie_do' => $this->ubezpieczenie_do,
            'umowa_leasingu' => $this->umowa_leasingu,
            'data_badania_technicznego' => $this->data_badania_technicznego,
            'id_uzytkownika' => $this->id_uzytkownika,
            'id_kto_dodal' => $this->id_kto_dodal,
            'data_czas_dodania' => $this->data_czas_dodania,
            'usuniete' => $this->usuniete,
            'id_typu' => $this->id_typu
        ];
    }
}