<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\MemberController;

class MemberController extends Controller
{
    public function profile(Request $request) 
    {
        $member = null; // $request->user()->member;

        return view('profile', compact('member'));
    }    
    
    public function index(Member $member)
    {
        $members = Member::with('user')->get();

        return view('membersPage', ['members' => $members]);
    }

    public function destroy(Member $member)
    {
        $member->delete();
        
        return redirect()->back()
            ->with('success','Ce membre a bien été effacé');
    }
}
