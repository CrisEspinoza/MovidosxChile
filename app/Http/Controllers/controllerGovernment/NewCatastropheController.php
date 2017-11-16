<?php

namespace App\Http\Controllers\controllerGovernment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\TypeCatastrophe;
use Validator;

class NewCatastropheController extends Controller
{
    public function index()
    {
        $regions = Region::all()->sortby('id');
        $communes = Commune::all()->sortby('region_id');
        $typesCats = TypeCatastrophe::all()->sortby('id');
        return view('/government/newCatastrophe', compact('regions', 'communes','typesCats')); 
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:20',
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

        $cat =  new Catastrophe;
        $cat->name= $request->name;
        $cat->typeCatastrophe_id =$request->typeCatastrophe_id;
        $cat->location_id = $request->location_id;
        $cat->description = $request->description;

        $cat->save();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:20',
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

        if ($validator->fails()){
            //echo "location_id: " . $request->location_id ."\n";
            //echo "region_id: " . $request->region_id."\n";
            //echo "name: " .$request->name."\n";
            //echo "descripcion: " .$request->description."\n";
            return redirect()->route('newCatastrophe.index')->withErrors($validator)->withInput();


            //return "sd ";
        }

        NewCatastropheController::create($request);
        return "holi";
    }

    public function show($id)
    {
        //
    }
}
