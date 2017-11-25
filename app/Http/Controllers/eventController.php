<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\Action;
use App\Location;
use Validator;
use Auth;

class eventController extends Controller
{
    //
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

        return view('event.create', compact("c","regions","communes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),
            [
                'start_date' => 'required|date|after:today',
                'end_date' => 'required|date|after:start_date',
                'nameEvent' => 'required|string|max:20',
                'region_id' => 'required|integer',
                'commune_id' => 'required|integer',
                'address' => 'required|string|min:5|max:255',
                'activities' => 'required|string|min:5|max:255',
                'foods' => 'required|string|min:5|max:255',
                'goal' => 'required|integer',
                'after' => 'La fecha seleccionada no es válida',
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
            return redirect()->route('createEvent',$c->id)->withErrors($validator)->withInput();
        }


        $loc = new Location;
        $loc->commune_id= $request->commune_id;
        $loc->calle = $request->address;
        $loc->save();


        $event = new Event;
        $event->name = $request->nameEvent;
        $event->activity = $request->activities;
        $event->foods = $request->foods;
        $event->location_id = $loc->id;

        $event->save();


        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;

        $event->action()->save($action);


        return redirect()->route('createEvent', $cat->id)->with('success', true)->with('message','Evento creado exitosamente');;

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
