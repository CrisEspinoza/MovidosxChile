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
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all()->sortby('id');
        $communes = Commune::all()->sortby('region_id');
        $typesCats = TypeCatastrophe::all()->sortby('id');
        return view('catastrophe.create',compact('regions', 'communes','typesCats'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        if ($validator->fails()) {
            return redirect()->route('catastrophe.create')->withErrors($validator)->withInput();
        }

        Catastrophe::create($request->all());
        return "hola";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catastrophes = Catastrophe::all();
        $types = TypeCatastrophe::all();

        return view('catastrophe.show', compact('catastrophes', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function byRegion($id){
        return Commune::where('region_id',$id)->get();

    }
}
