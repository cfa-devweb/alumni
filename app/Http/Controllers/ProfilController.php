<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Member $member)
    {
        $members = Member::with('user')->get();
        return view('membersPage', ['members' => $members]);
    }
}
