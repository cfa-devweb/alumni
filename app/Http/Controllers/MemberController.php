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

    public function show($id, Member $member) 
    {
        $members = Member::with('user')->where('member.id', '=', $id)->get();

        return view('profil', ['members' => $members]);
    }

    // public function destroy(Member $member)
    // {
    //     $member->delete();

    //     return redirect()->back()
    //                     ->with('success','Ce membre a bien été effacé');
    // }    
}

