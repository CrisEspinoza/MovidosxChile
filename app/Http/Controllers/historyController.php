<?php

namespace App\Http\Controllers;

use App\History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class historyController extends Controller
{
    public function registerHistory($id_user, $action)
    {
        $hist = new History();

        $hist->user_id = $id_user;
        $hist->action = $action;
        $dateTime = Carbon::now();
        $hist->date = $dateTime;
        $hist->save();
    }
}
