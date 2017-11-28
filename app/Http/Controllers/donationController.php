<?php

namespace App\Http\Controllers;

use App\ActionUser;
use Illuminate\Http\Request;
use App\Catastrophe;
use App\Region;
use App\Commune;
use App\Action;
use App\Location;
use App\Donation;
use Validator;
use Auth;
use App\Bank;
use App\User;



class donationController extends Controller
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
        //
        $banks = Bank::All();
        $c = Catastrophe::find($id);
        return view('donation.create', compact("c",'banks'));
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
                'goal' => 'required|integer',
                'bank' => 'required|integer',
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
            return redirect()->route('createDonation',$c->id)->withErrors($validator)->withInput();
        }

        $donation = new Donation;
        $donation->bank_id = $request->bank;
        $donation->mount = 0;
        $donation->save();

        $cat =  Catastrophe::where('name',$request->name)->first();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$cat->id;
        $action->user_id = Auth::id();
        $action->goal = $request->goal;
        $action->approved = 0;

        $donation->action()->save($action);
        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Create", "Action/Donation", $action->id);

        return redirect()->route('createDonation', $cat->id)->with('success', true)->with('message','Donación creada exitosamente');
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
        $action->actionOP_type = "Donación";
        $donation = Donation::find($action->actionOP_id);
        $c = Catastrophe::find($action->catastrophe_id);


        return view('donation.edit', compact('action','c','donation'));
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
                'monto' => 'required|integer',
            ],
            [
                'required' => 'Este campo es requerido',
                'integer' => 'Debe ser un valor numérico',
            ]
        );
        if ($validator->fails()) {
            $action = Action::where('actionOP_id',$id)->get();

            for($i=0 ; $i< count($action); $i++){
                if($action[$i]->actionOP_type == 'App\Donation'){
                    return redirect()->route('donation.edit', $action[$i]->id)->withErrors($validator)->withInput();
                }
            }
        }


        $donation = Donation::find($id);
        $donation->mount = $donation->mount + $request->monto;
        $donation->update();

        $action = Action::where('actionOP_id',$id)->get();

        for($i=0 ; $i< count($action); $i++){
            if($action[$i]->actionOP_type == 'App\Donation'){
                $action[$i]->progress = ($donation->mount / $action[$i]->goal)*100;
                $action[$i]->update();

                $user = User::find(Auth::id());

                $action_user= new ActionUser;
                $action_user->action_id= $action[$i]->id;
                $action_user->user_id= $user->id;
                $action_user->action_type = "Donation";
                $action_user->mount = $request->monto;
                $action_user->save();
                $hist = new historyController();
                $hist->registerHistory(Auth::user()->id, "Update", "Action/Donation", $action->id);

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
