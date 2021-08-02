<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /*
    *
    * From_member_id = l'id du membre 
    * to_member_id = l'id de l'user destinataire
    *
    */
    public function show()
    {
        
        $messages = Message::with(['member','toMember'])->where('type_message','=','member') -> where('from_member_id','=',Auth::user()-> id)->get();
        dd($messages);
        return view('message',['messages' => $messages]);
    }
}
