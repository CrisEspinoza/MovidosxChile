<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use Validator;
use App\Volunteering;
use App\Action;
use App\Region;
use App\Commune;
use App\Location;
use Auth;
use Mail;
use Session;
use Redirect;
use App\RNV;
use App\User;
use App\ActionUser;


class volunteeringController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        //$this->middleware('permiso:3');
     }

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
                'profile_voluntary' => 'required|string|min:5|max:255',
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
        $volunt->current_voluntaries= 0;

        $volunt->save();
        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Create", "Action/Volunteering", $volunt->id);

        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;
        $action->approved = 0;

        $rnvs = RNV::where('disponible',1)->get();

        foreach ($rnvs as $rnv)
        {
            Mail::send('mail.emailrnvV' , $request->all() , function($msj) use ($rnv)
            {
                $msj->subject('Correo de aviso de creación de medida');
                $msj->to($rnv->mail);
            });
        }

        $volunt->action()->save($action);
        return redirect()->route('createVol', $cat->id)->with('success', true)->with('message','Voluntariado creado exitosamente');
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
        $volunteering = Volunteering::find($id);
        $action = Action::where('actionOP_id',$id)->get();

        for($i=0 ; $i< count($action); $i++){
            if($action[$i]->actionOP_type == 'App\Volunteering'){
                $user = User::find(Auth::id());
                $action_users = ActionUser::where('user_id',$user->id)->get();

                for($j=0 ; $j< count($action_users); $j++){
                    if($action_users[$j]->user_id == $user->id and $action_users[$j]->action_type == "Volunteering"){
                        return redirect()->route('action.edit', $action[$i]->id)->with('success', true)->with('message','No puedes participar en el voluntariado, ya estas participando esta medida');
                    }
                }
                $volunteering->current_voluntaries = $volunteering->current_voluntaries + 1;
                $volunteering->update();

                $hist = new historyController();
                $hist->registerHistory(Auth::user()->id, "Update", "Action/Volunteering", $volunteering->id);

                $action[$i]->progress = ($volunteering->current_voluntaries / $action[$i]->goal)*100;
                $action[$i]->update();

                $action_user= new ActionUser;
                $action_user->action_id= $action[$i]->id;
                $action_user->user_id= $user->id;
                $action_user->action_type = "Volunteering";
                $action_user->save();

                return redirect()->route('action.edit', $action[$i]->id)->with('success', true)->with('message','Gracias por participar en esta medida');
            }
        }

        return $volunteering;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();

        return redirect()->route('indexAction', 1)->with('success', true)->with('message','Se ha eliminado la medida exitosamente');
    }

}
