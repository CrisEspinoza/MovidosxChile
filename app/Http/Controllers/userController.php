<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class userController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('user.index', compact('users','roles'));
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user= User::find($id);
        if($request->input('banned')==1){
            $user->banned=true;
        }
        else{
            $user->banned=false;
        }

        $user->banned = $request->input('banned');
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->update();

        return redirect()->route('user.index');
    }


    public function destroy($id)
    {
        //
    }
}
