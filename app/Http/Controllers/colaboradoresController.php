<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colaboradoresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //return view('colaboradores')
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('colaboradores');
    }
}
