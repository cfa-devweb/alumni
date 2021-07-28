<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show()
    {
        $messages = Message::with(['member','toMember'])->where('type_message','=','member')->get();
        dd($messages);
        return view('profils',['messages' => $messages]);
    }
}
