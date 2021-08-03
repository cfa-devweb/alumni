<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index()
    {
        
       
        $conversations = Message:: with(['member','toMember'])
            -> where('type_message','member')
            -> where( function($query)
            {
                $query -> where('to_id',Auth::user()-> id)
                    -> orWhere('from_member_id',Auth::user() -> id);
                
            }) ->get();
            $from =[];
            $to = [];
            foreach ($conversations as $item) {
                if($item -> from_member_id != Auth::id())
                {
                    $from[] = $item;
                }
                else
                {
                    $to[] = $item;
                }
            }
            dd($to);
        $messages_group = Message::with(['member','group'])
            -> where('from_member_id','=',Auth::user()-> id) 
            -> orWhere('to_id','=',Auth::user()-> id)
            -> where('type_message','=','group')->get();
        return view('messages',['conversations' => $conversations,'messageGroup' => $messages_group]);
    }

    /*
    *
    * From_member_id = l'id du membre 
    * to_member_id = l'id de l'user destinataire
    *
    */
    public function show()
    {
        $messages = Message::with(['member','toMember'])-> where('from_member_id','=',Auth::user()-> id)->get();
        
        return view('profils',['messages' => $messages]);
    }
}
