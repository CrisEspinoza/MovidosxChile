<?php

namespace App\Http\Controllers\controllerGovernment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Commune;
use App\TypeCatastrophe;


class NewCatastropheController extends Controller
{
    public function index()
    {
        $regions = Region::all()->sortby('id');
        $communes = Commune::all()->sortby('region_id');
        $typesCats = TypeCatastrophe::all()->sortby('id');
        return view('/government/newCatastrophe', compact('regions', 'communes','typesCats')); 
    }

    public function create()
    {
        $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:20',
            'type' => 'required|integer',
            'comunne_id' => 'required|integer',
            'description' => 'required|string|min:5|max:255'
            ],
        [
            'required' => 'Este campo es requerido',
            'string' => 'Debe usar caracteres',
            'max' => 'Cantidad mayor a la permitida',
            'integer' => 'Debe ser un valor numérico'
        ]
            );
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
}
