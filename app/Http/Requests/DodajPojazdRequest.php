<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DodajPojazdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nazwa' => 'required',
            'nr_rejestracyjny' => 'required',
            'id_ubezpieczenia' => 'required',
            'ubezpieczenie_od' => 'required',
            'ubezpieczenie_do' => 'required',
            'umowa_leasingu' => 'required',
            'data_badania_technicznego' => 'required',
            'id_uzytkownika' => 'required',
            //'id_kto_dodal' => 'required',
            'data_czas_dodania' => 'required',
            'id_typu' => 'required'
        ];
    }
}