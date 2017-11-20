<?php

namespace App\Http\Controllers\controllerOrganizations;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catastrophe;

class ListCatastropheController extends Controller
{

    public function index()
    {
        $catastrophes = Catastrophe::all();
        return view('/organizations/listCatastrophe', compact('catastrophes')); 
    }

    public function create($id)
    {
        $c = Catastrophe::find($id);
        return  view('organizations.addActions', compact("c"));
    }


    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        $c = Catastrophe::find($id);
        return  view('organizations.addActions', compact("c"));
    }


    public function show($id)
    {
        $c = Catastrophe::find($id);
        return  view('organizations.seeCatastrophe', compact('c'));
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
