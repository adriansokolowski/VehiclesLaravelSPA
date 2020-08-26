<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UbezpieczenieResource;

use App\Ubezpieczenie;



class UbezpieczenieController extends Controller
{
    public function index()
    {
        return UbezpieczenieResource::collection(Ubezpieczenie::all());
    }
}
