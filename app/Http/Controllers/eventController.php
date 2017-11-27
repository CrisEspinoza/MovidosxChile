<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\Action;
use App\Location;
use Mail;
use Session;
use Redirect;
use App\RNV;
use Validator;
use Auth;
use App\ActionUser;

class eventController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        $this->middleware('permiso:3');
     }

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
        $event->participants = 0;

        $event->save();

        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;

        $event->action()->save($action);

        $rnvs = RNV::where('disponible',1)->get();

        foreach ($rnvs as $rnv)
        {
            Mail::send('mail.emailrnvE' , $request->all() , function($msj) use ($rnv)
            {
                $msj->subject('Correo de aviso de creación de medida');
                $msj->to($rnv->mail);
            });
        }


        return redirect()->route('createEvent', $cat->id)->with('success', true)->with('message','Evento creado exitosamente');

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
        $event = Event::find($id);
        $action = Action::where('actionOP_id',$id)->get();


        for($i=0 ; $i< count($action); $i++){
            if($action[$i]->actionOP_type == 'App\Event'){
                $user = User::find(Auth::id());
                $action_users = ActionUser::where('user_id',$user->id)->get();

                for($j=0 ; $j< count($action_users); $j++){
                    if($action_users[$j]->user_id == $user->id ){
                        return redirect()->route('action.edit', $action[$i]->id)->with('success', true)->with('message','No puedes participar al evento nuevamente, ya estas participando esta medida');
                    }
                }
                $event->participants = $event->participants + 1;
                $event->update();
                $action[$i]->progress = ($event->participants / $action[$i]->goal)*100;
                $action[$i]->update();



                $action_user= new ActionUser;
                $action_user->action_id= $action[$i]->id;
                $action_user->user_id= $user->id;
                $action_user->action_type = "Event";
                $action_user->save();

                return redirect()->route('action.edit', $action[$i]->id)->with('success', true)->with('message','Gracias por participar en esta medida');
            }
        }
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
