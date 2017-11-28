<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Bank;
use Illuminate\Http\Request;
use App\Catastrophe;
use App\Action;
use App\Event;
use App\Volunteering;
use App\Collection_center;
use App\Donation;
use App\Location;
use Illuminate\Support\Facades\Auth;


class actionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       //$this->middleware('auth');
     }

    public function index($id)
    {
        $c = Catastrophe::find($id);
        $eventos = Event::All();
        $voluntariados = Volunteering::All();
        $donaciones = Donation::All();
        $centros = Collection_center::All();

        if(Auth::user()->role_id == 1) {
            $medidas = Action::where('catastrophe_id', $id)->get()->sortBy('actionOP_type');

            for ($i = 0; $i < count($medidas); $i++) {
                if ($medidas[$i]->actionOP_type == "App\Donation") {
                    $medidas[$i]->actionOP_type = "Donación";
                } else if ($medidas[$i]->actionOP_type == "App\Event") {
                    $medidas[$i]->actionOP_type = "Evento a beneficio";
                } else if ($medidas[$i]->actionOP_type == "App\Collection_center") {
                    $medidas[$i]->actionOP_type = "Centro de acopio";
                } else if ($medidas[$i]->actionOP_type == "App\Volunteering") {
                    $medidas[$i]->actionOP_type = "Voluntariado";
                }
            }

            

            return view('action.index', compact('c', 'medidas', 'eventos', 'voluntariados', 'donaciones', 'centros'));
        }
        else if(Auth::user()->role_id == 2) {
            $medidas = Action::where('approved', 0)->get();

            for ($i = 0; $i < count($medidas); $i++) {
                if ($medidas[$i]->actionOP_type == "App\Donation") {
                    $medidas[$i]->actionOP_type = "Donación";
                } else if ($medidas[$i]->actionOP_type == "App\Event") {
                    $medidas[$i]->actionOP_type = "Evento a beneficio";
                } else if ($medidas[$i]->actionOP_type == "App\Collection_center") {
                    $medidas[$i]->actionOP_type = "Centro de acopio";
                } else if ($medidas[$i]->actionOP_type == "App\Volunteering") {
                    $medidas[$i]->actionOP_type = "Voluntariado";
                }
            }

            return view('action.index', compact('c', 'medidas', 'eventos', 'voluntariados', 'donaciones', 'centros'));
        }
        else if(Auth::user()->role_id == 3 and $id == 0 ){
            $medidas = Action::where('user_id', Auth::id())->get()->sortBy('actionOP_type');

            for ($i = 0; $i < count($medidas); $i++) {
                if ($medidas[$i]->actionOP_type == "App\Donation") {
                    $medidas[$i]->actionOP_type = "Donación";
                } else if ($medidas[$i]->actionOP_type == "App\Event") {
                    $medidas[$i]->actionOP_type = "Evento a beneficio";
                } else if ($medidas[$i]->actionOP_type == "App\Collection_center") {
                    $medidas[$i]->actionOP_type = "Centro de acopio";
                } else if ($medidas[$i]->actionOP_type == "App\Volunteering") {
                    $medidas[$i]->actionOP_type = "Voluntariado";
                }
            }

            $aux = 0;

            return view('action.index', compact('c', 'medidas', 'eventos', 'voluntariados', 'donaciones', 'centros','aux'));

        }

        else if(Auth::user()->role_id == 3 and $id != 0 ){
             $medidas = Action::where('catastrophe_id', $id)->get()->sortBy('actionOP_type');

            for ($i = 0; $i < count($medidas); $i++) {
                if ($medidas[$i]->actionOP_type == "App\Donation") {
                    $medidas[$i]->actionOP_type = "Donación";
                } else if ($medidas[$i]->actionOP_type == "App\Event") {
                    $medidas[$i]->actionOP_type = "Evento a beneficio";
                } else if ($medidas[$i]->actionOP_type == "App\Collection_center") {
                    $medidas[$i]->actionOP_type = "Centro de acopio";
                } else if ($medidas[$i]->actionOP_type == "App\Volunteering") {
                    $medidas[$i]->actionOP_type = "Voluntariado";
                }
            }

            $aux= 1;

            return view('action.index', compact('c', 'medidas', 'eventos', 'voluntariados', 'donaciones', 'centros','aux'));

        }

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

        $action = Action::find($id);
        $c = Catastrophe::find($action->catastrophe_id);

        if(Auth::user()->role_id == 1) {
            if ($action->actionOP_type == "App\Donation") {
                $action->actionOP_type = "Donación";
                $donation = Donation::find($action->actionOP_id);

                return view('donation.edit', compact('action', 'c', 'donation'));
            } else if ($action->actionOP_type == "App\Event") {
                $action->actionOP_type = "Evento a beneficio";

                $event = Event::find($action->actionOP_id);
                $location = Location::find($event->location_id);
                return view('event.edit', compact('action', 'c', 'event', 'location'));

            } else if ($action->actionOP_type == "App\Collection_center") {
                $action->actionOP_type = "Centro de acopio";
                $center = Collection_center::find($action->actionOP_id);
                $assets = Asset::all()->sortBy('id');
                $location = Location::find($center->location_id);
                return view('collection_center.edit', compact('action', 'c', 'center', 'location', 'assets'));

            } else if ($action->actionOP_type == "App\Volunteering") {
                $action->actionOP_type = "Voluntariado";
                $volunteering = Volunteering::find($action->actionOP_id);
                $location = Location::find($volunteering->location_id);
                return view('volunteering.edit', compact('action', 'c', 'volunteering', 'location'));
            }
        }
        else if(Auth::user()->role_id == 3 or Auth::user()->role_id == 2){
            if ($action->actionOP_type == "App\Donation") {
                $action->actionOP_type = "Donación";
                $donation = Donation::find($action->actionOP_id);

                return view('donation.show', compact('action', 'c', 'donation'));
            } else if ($action->actionOP_type == "App\Event") {
                $action->actionOP_type = "Evento a beneficio";

                $event = Event::find($action->actionOP_id);
                $location = Location::find($event->location_id);
                return view('event.show', compact('action', 'c', 'event', 'location'));

            } else if ($action->actionOP_type == "App\Collection_center") {
                $action->actionOP_type = "Centro de acopio";
                $center = Collection_center::find($action->actionOP_id);
                $assets = Asset::all()->sortBy('id');
                $location = Location::find($center->location_id);
                return view('collection_center.show', compact('action', 'c', 'center', 'location', 'assets'));

            } else if ($action->actionOP_type == "App\Volunteering") {
                $action->actionOP_type = "Voluntariado";
                $volunteering = Volunteering::find($action->actionOP_id);
                $location = Location::find($volunteering->location_id);
                return view('volunteering.show', compact('action', 'c', 'volunteering', 'location'));
            }
        }

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
