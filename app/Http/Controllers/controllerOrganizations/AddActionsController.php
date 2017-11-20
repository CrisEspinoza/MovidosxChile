<?php

namespace App\Http\Controllers\controllerOrganizations;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catastrophe;

class AddActionsController extends Controller
{

    public function index()
    {
        return view('/organizations/addActions'); 
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id, $type)
    {

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
