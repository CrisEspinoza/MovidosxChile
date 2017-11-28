<?php

namespace App\Http\Controllers;

use App\History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class historyController extends Controller
{
    public function registerHistory($id_user, $action, $table, $id_entity)
    {
        $hist = new History();

        $hist->user_id = $id_user;
        $hist->action = $action;
        $hist->table_modified = $table;
        $hist->id_entity = $id_entity;
        $hist->save();
    }
}
