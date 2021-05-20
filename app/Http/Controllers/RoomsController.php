<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rooms;

class RoomsController extends Controller
{
    public function showAll(){
        $rooms = new Rooms;
        return view('suitescontainer', ['rooms' => $rooms->all()]);
    }

    public function getRoomInfo($id){
        $room = Rooms::find($id);
        return view('suiteinfo', ['room' => $room]);
    }

    public function getInfo($id){
        $room = Rooms::find($id);
        return view('after-suiteform', ['room' => $room]);
    }

    public function searchRoom(Request $req){
        $validation = $req->validate([
            'arrival-date' => 'date',
            'departure-date' => 'date',
            'guest_quantity' => 'required|min:0|max:5'
        ]);

        $rooms = DB::table('rooms')->where('guests', $req->input('guest_quantity'))->get();

        return view('suitescontainer', ['rooms' => $rooms]);
    }
}
