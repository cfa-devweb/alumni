<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfilController extends Controller
{
    public function index(Member $member)
    {
        $members = Member::with('user')->get();
        return view('membersPage', ['members' => $members]);
    }
}
