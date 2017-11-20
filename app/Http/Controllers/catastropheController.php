<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\TypeCatastrophe;
use App\Location;
use Validator;
use Thujohn\Twitter\Facades\Twitter;

class catastropheController extends Controller
{

    public function index()
    {
        $catastrophes = Catastrophe::all()->sortBy('id');
        return view('catastrophe.index', compact('catastrophes'));
    }

    public function create()
    {
        $regions = Region::all()->sortby('id');
        $communes = Commune::all()->sortby('region_id');
        $typesCats = TypeCatastrophe::all()->sortby('id');
        return view('catastrophe.create',compact('regions', 'communes','typesCats'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|string|max:100',
                'typeCatastrophe_id' => 'required|integer',
                'location_id' => 'required|integer',
                'description' => 'required|string|min:5|max:255'
            ],
            [
                'required' => 'Este campo es requerido',
                'string' => 'Debe usar caracteres',
                'max' => 'Cantidad mayor a la permitida',
                'integer' => 'Debe ser un valor numérico'
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('catastrophe.create')->withErrors($validator)->withInput();
        }

        Catastrophe::create($request->all());
<<<<<<< HEAD
        return "hola";


=======

        return redirect()->route('catastrophe.index')->with('success', true)->with('message','Catastrofe creada exitosamente');
>>>>>>> dae7a4eb8a3d5a9a2aed13339b99446421cef43b
    }

    public function show($id)
    {
        $catastrophes = Catastrophe::all();
        $types = TypeCatastrophe::all();

        return view('catastrophe.show', compact('catastrophes', 'types'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function byRegion($id){
        return Commune::where('region_id',$id)->get();

    }
}
