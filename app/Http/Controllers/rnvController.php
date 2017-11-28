<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RNV;

class rnvController extends Controller
{
    public function index()
    {
        $rnvs = RNV::All();
        return view('rnv.index',compact('rnvs'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
