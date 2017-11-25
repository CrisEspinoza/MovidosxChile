<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use App\Action;

class actionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $c = Catastrophe::find($id);
        $medidas = Action::where('catastrophe_id',$id)->get()->sortBy('actionOP_type');

        for ($i = 0; $i < count($medidas); $i++) {
            if($medidas[$i]->actionOP_type == "App\Donation"){
                $medidas[$i]->actionOP_type = "Donación";
            }
            else if($medidas[$i]->actionOP_type == "App\Event"){
                $medidas[$i]->actionOP_type = "Evento a beneficio";
            }
            else if($medidas[$i]->actionOP_type == "App\Collection_center"){
                $medidas[$i]->actionOP_type = "Centro de acopio";
            }
            else if($medidas[$i]->actionOP_type == "App\Volunteering"){
                $medidas[$i]->actionOP_type = "Voluntariado";
            }
        }
                        

        return view('action.index', compact('c','medidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


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

    public function menu($id)
    {
        $c = Catastrophe::find($id);
        return view('action.menu',compact('c'));

    }

}
