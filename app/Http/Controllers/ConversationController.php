<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = Conversation::with(['promotion'])->get();  
        $messages = Message::with('member')->get(); 
        
        return view('conversations.conversations',['conversations' => $messages]);
    }

    /*
    *
    * $conversations get all conversation
    * $message get all message for conversation
    * @param $id int id of promotion_year send by $namePromotion in method index()
    *
    */
    public function show($id)
    {
        $messages =  Message::with(['member']) -> where('conversation_id',$id) ->get();
       
        return view('conversations',['messages' => $messages]);
    }
}
