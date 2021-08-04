<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;
use App\Models\MemberPromotion;
use App\Models\ConversationMember;
use App\Models\Promotion;
use App\Models\Promotion_year;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $namePromotion = Promotion_year::with(['promotion'])->get();   
        return view('messages',['conversations' => $namePromotion]);
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
        $conversations = Conversation::all() -> where('promotion_year_id',$id);
        $messages =  Message::with(['member']) -> where('conversation_id',$conversations ->id) ->get();
       
        return view('conversations',['messages' => $messages,'conversations'=> $conversations]);
    }
}
