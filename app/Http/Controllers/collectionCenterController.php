<?php

namespace App\Http\Controllers;

use App\Collection_center;
use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\Action;
use App\Location;
use App\Asset;
use Validator;
use Auth;
use App\ActionUser;
use App\User;

class collectionCenterController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        //$this->middleware('permiso:3');
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
        return view('collection_center.create', compact("c","regions","communes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),
            [
                'start_date' => 'required|date|after:today',
                'end_date' => 'required|date|after:start_date',
                'nameCenter' => 'required|string|max:20',
                'region_id' => 'required|integer',
                'commune_id' => 'required|integer',
                'address' => 'required|string|min:5|max:255',
                'goal' => 'required|integer',

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
            return redirect()->route('createCollCenter',$c->id)->withErrors($validator)->withInput();
        }

        $loc = new Location;
        $loc->commune_id= $request->commune_id;
        $loc->calle = $request->address;
        $loc->save();


        $collection = new Collection_center;
        $collection->name = $request->nameCenter;
        $collection->location_id = $loc->id;
        $collection->collected_assets = 0;

        $collection->save();


        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;
        $action->approved = 0;
        $hist = new historyController();


        $collection->action()->save($action);
        $hist->registerHistory(Auth::user()->id, "Create", "Action/CollectionCenter", $action->id);


        return redirect()->route('createCollCenter', $cat->id)->with('success', true)->with('message','Centro de acopio creado exitosamente');;
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
        //el $id pertenece a la medida y ocn ese se encuentra la donacion
        $action = Action::find($id);
        $action->actionOP_type = "Centro de acopio";
        $center = Collection_center::find($action->actionOP_id);
        $location = Location::find($center->location_id);
        $assets = Asset::all()->sortBy('id');
        $c = Catastrophe::find($action->catastrophe_id);

        return view('collection_center.edit', compact('action','c','center','location','assets'));
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
        $validator = Validator::make($request->all(),
            [
                'type_asset' => 'required|string',
                'name_asset' => 'required|string',
            ],
            [
                'required' => 'Este campo es requerido',
                'string' => 'Debe usar caracteres',
            ]
        );
        if ($validator->fails()) {
            $action = Action::where('actionOP_id',$id)->get();

            for($i=0 ; $i< count($action); $i++){
                if($action[$i]->actionOP_type == 'App\Collection_center'){
                    return redirect()->route('collectionCenter.edit', $action[$i]->id)->withErrors($validator)->withInput();
                }
            }
        }

        $center = Collection_center::find($id);
        $center->collected_assets = $center->collected_assets + 1;
        $center->update();

        $action = Action::where('actionOP_id',$id)->get();
        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Update", "Action/CollectionCenter", $action->id);

        for($i=0 ; $i< count($action); $i++){
            if($action[$i]->actionOP_type == 'App\Collection_center'){
                $action[$i]->progress = ($center->collected_assets / $action[$i]->goal)*100;
                $action[$i]->update();

                $user = User::find(Auth::id());

                $action_user= new ActionUser;
                $action_user->action_id= $action[$i]->id;
                $action_user->user_id= $user->id;
                $action_user->action_type = "Centro de acopio";
                $action_user->type_asset = $request->type_asset;
                $action_user->asset = $request->name_asset;
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
        $action = Action::find($id);
        $action->delete();
        return redirect()->route('indexAction', 1)->with('success', true)->with('message','Se ha eliminado la medida exitosamente');
    }
}
