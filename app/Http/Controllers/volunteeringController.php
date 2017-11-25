<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use Validator;
use App\Volunteering;
use App\Action;
use App\Region;
use App\Commune;
use Auth;


class volunteeringController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $c = Catastrophe::find($id);
        $regions = Region::all()->sortby('id');
        $communes = Commune::all()->sortby('region_id');
        return view('volunteering.create', compact("c","regions","communes"));
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
                //'name' => 'required|string|max:20',
                'start_date' => 'required|date|after:today',
                'end_date' => 'required|date|after:start_date',
                'goal' => 'required|integer',
                'min_voluntaries' => 'required|integer',
                'max_voluntaries' => 'required|integer',
                'type_work' => 'required|string',
                'profile_voluntary' => 'required|string|min:5|max:255'
                'region_id' => 'required|integer',
                'commune_id' => 'required|integer',
                'address' => 'required|string|min:5|max:255',
            ],
            [
                'required' => 'Este campo es requerido',
                'string' => 'Debe usar caracteres',
                'max' => 'Cantidad mayor a la permitida',
                'integer' => 'Debe ser un valor numérico',
                'after' => 'La fecha seleccionada no es válida',


            ]
        );


        if ($validator->fails()) {
            $c = Catastrophe::where('name',$request->name)->first();
            return redirect()->route('createVol',$c->id)->withErrors($validator)->withInput();
        }

        $loc = new Location;
        $loc->commune_id= $request->commune_id;
        $loc->calle = $request->address;
        $loc->save();


        $volunt = new Volunteering;
        $volunt->min_voluntaries = $request->min_voluntaries;
        $volunt->max_voluntaries = $request->max_voluntaries;
        $volunt->profile_voluntary= $request->profile_voluntary;
        $volunt->type_work = $request->type_work;
        $volunt->location_id = $loc->id;

        $volunt->save();

        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;

        $volunt->action()->save($action);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

}
