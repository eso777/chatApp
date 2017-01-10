<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Rooms;
class RoomsCtrl extends Controller
{
    public function getViewAddRoom() {
        return view('front.rooms.addRoom');
    }

    public function postViewAddRoom(Request $request) {

        $this->validate($request,['name'=>'required|min:3']);
        Rooms::create($request->all());
        return redirect()->to(Url('/').'/allRooms')->with(['msg'=>'Room has been Added Successfully.']) ;

    }
    public function getMyRooms() {


    }
    public function getallRooms() {

        $rooms = Rooms::paginate(30);
        return view('front.rooms.allRooms',compact('rooms'));

    }
}
