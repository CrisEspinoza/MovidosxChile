<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\User;
use Illuminate\Support\Facades\Auth;

class organizationController extends Controller
{

  public function __construct()
  {
      $this->middleware('permiso:2');
  }

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
        $aux = $request->email[0] . $request->run ;
        $user->password = bcrypt($aux);
        $user->run = $request->run;
        $user->save();
        Mail::send('mail.organization' , $request->all() , function($msj) use ($user)
    {
        $msj->subject('Correo de confirmacion de registro');
        $msj->to($user->email);
    });
        $hist = new historyController();
        $hist->registerHistory(Auth::user()->id, "Create", "User/Organization", $user->id);
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
