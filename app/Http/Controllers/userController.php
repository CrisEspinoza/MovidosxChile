<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

  public function __construct()
  {
      $this->middleware('permiso:2')->except('edit');
      $this->middleware('auth');
  }

    public function index()
    {
        $users = User::where('role_id', 1)->get()->sortby('name');
        $admins = User::where('role_id', 2)->get()->sortby('name');
        $organs = User::where('role_id', 3)->get()->sortby('name');
        return view('user.index', compact('users','admins', 'organs'));
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
            $user->banned=1;
        }
        else{
            $user->banned=0;
        }

        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Update", "User/".$user->role->type, $user->id);

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
