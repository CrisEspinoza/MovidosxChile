<?php

namespace App\Http\Controllers\controllerOrganizations;

use App\Action;
use App\Catastrophe;
use App\Volunteering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteeringController extends Controller
{
    public function index($id)
    {
        $c = Catastrophe::find($id);
        return view('/organizations/volunteering', compact("c"));
    }

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

    public function store(Request $request)
    {
        VolunteeringController::create($request);
        return $request;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
