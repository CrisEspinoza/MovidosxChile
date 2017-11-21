<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class organizationController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('organization.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'run' => 'required|string',
                'email' => 'required|string|min:5|max:255',
                'password' => 'required|string|min:6|confirmed',
            ],
            [
                'required' => 'Este campo es requerido',
                'string' => 'Debe usar caracteres',
                'max' => 'Cantidad mayor a la permitida',
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('organization.create')->withErrors($validator)->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->lastname;
        $user->run = "0";
        $user->password = $request->password;
        $user->role_id = 3;
        
        $user->save();

        return redirect()->route('organization.create')->with('success', true)->with('message','Catastrofe creada exitosamente');

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
