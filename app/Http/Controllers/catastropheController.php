<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\TypeCatastrophe;
use App\Location;
use DB;
use Datetime;
use Carbon\Carbon;
use App\Quotation;
use Validator;
use Illuminate\Support\Facades\Auth;
use Thujohn\Twitter\Facades\Twitter;

class catastropheController extends Controller
{

    public function __construct()
    {
      //$this->middleware('permiso:2')->only('create');
      //$this->middleware('auth');
    }

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

        $loc = new Location;
        $loc->commune_id= $request->location_id;
        $loc->save();

        $cat =  new Catastrophe;
        $cat->name= $request->name;
        $cat->typeCatastrophe_id =$request->typeCatastrophe_id;
        $cat->location_id = $loc->id;
        $cat->description = $request->description;

        $cat->save();
        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Create", "Catastrophe", $cat->id);
        $message = "ALERTA DE CATÁSTROFE: " . $request->name . " en la comuna de " . $loc->commune->name . ", región de " . $loc->commune->region->name . " #CatastrofeNacional";
        Twitter::postTweet(['status' => $message, 'format' => 'json']);


        return redirect()->route('catastrophe.index')->with('success', true)->with('message','Catastrofe creada exitosamente');

    }

    public function show($id)
    {
        $c=Catastrophe::where('id',$id)->first();

        return view('catastrophe.show', compact('c'));
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
