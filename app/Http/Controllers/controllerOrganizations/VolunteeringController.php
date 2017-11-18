<?php

namespace App\Http\Controllers\controllerOrganizations;

use App\Action;
use App\Catastrophe;
use App\Volunteering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteeringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catastrophes = Catastrophe::all()->sortby('region_id');
        return view('/organizations/volunteering', compact('catastrophes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $volunt = new Volunteering;
        $volunt->min_voluntaries = $request->min_voluntaries;
        $volunt->max_voluntaries = $request->max_voluntaries;
        $volunt->profile_voluntary= $request->profile_voluntary;
        $volunt->type_work = $request->type_work;

        $volunt->save();

        $action = new Action;

        $action->start_date = $request->start_date;
        $action->end_date = $request->end_date;
        $action->catastrophe_id =$request->cat_id;
        $action->user_id = 1;
        $action->goal = $request->goal;

        $volunt->action()->save($action);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VolunteeringController::create($request);
        return $request;
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
