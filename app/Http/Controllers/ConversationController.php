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
         //ne s'appelle jamais
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
        //get own conversation by id of promotion 
        $conversation = Conversation::with(['promotion']) -> where('promotion_id',$id)->firstOrFail();

        //get all message for conversation 
        $messages =  Message::with(['member']) -> where('conversation_id',$id) ->get();
        
        return view('conversations.conversations',['messages' => $messages,'conversation' => $conversation]);
    }
    public function store(Request $request)
    {
        
        dd($request);
        $request -> validate([
            'content' => 'required'
        ]);
        $message = Message::create([
            'content' => $request ->content,
            'member_id' => Auth::id(),
            ''
        ]);
    }
}
