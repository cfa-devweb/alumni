<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\MemberController;

class MemberController extends Controller
{
    public function index(Member $member)
    {
        $members = Member::with('user')->get();
        return view('membersPage', ['members' => $members]);
    }
}
