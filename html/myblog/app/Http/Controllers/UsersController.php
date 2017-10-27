<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function ShowEvent()
    {
        $res=Event::all();
        return view('data', compact('res'));
    }
    public function ShowEventRow(Event $id_data) //Event::find(wildcard);
    {
        // $id_data=Event::find($id);
        return view('data_row', compact('id_data'));
    }
}
