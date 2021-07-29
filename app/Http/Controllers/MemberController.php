<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Models\Member;

class MemberController extends Controller
{
    
        public function index(Member $member)
    {
        $members = Member::with('user')->get();

        return view('membersPage', ['members' => $members]);
    }
    
}

