<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypPojazduResource;
use Illuminate\Http\Request;

use App\TypPojazdu;

class PojazdyTypyController extends Controller
{
    public function index()
    {
        return TypPojazduResource::collection(TypPojazdu::all());
    }
}
