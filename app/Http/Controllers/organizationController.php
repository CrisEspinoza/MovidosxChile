<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
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


    public function store(Request $request){
        $user = new User;
        $user->role_id = 3;
        $user->banned = 0;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt('secret');
        $user->run = $request->run;
        $user->save();
        return redirect()->route('organization.create')->with('success', true)->with('message','Organización creada exitosamente');

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
