<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DodajPojazdRequest;
use App\Http\Resources\PojazdResource;
use Illuminate\Http\Request;

use App\Pojazd;

class PojazdController extends Controller
{
    public function index()
    {
        return PojazdResource::collection(Pojazd::paginate(10));
    }

    public function store(DodajPojazdRequest $request)
    {
        $pojazd = Pojazd::Create($request->validated());

        return new PojazdResource($pojazd);
    }

    public function show($id)
    {
        $pojazd = Pojazd::find($id);

        return new PojazdResource($pojazd);
    }

    public function update($id, DodajPojazdRequest $request){
        $pojazd = Pojazd::find($id);
        $pojazd->update($request->validated());

        return new PojazdResource($pojazd);
    }

    public function destroy($id)
    {
        $pojazd = Pojazd::find($id);
        $pojazd->delete();

        return response()->noContent();
    }
}
