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

        return view('members/index', ['members' => $members]);
    }

    public function edit(Member $member)
    {
        return view('members/update', compact('member'));
    }


    public function update(Request $request) 
    {
        $request->validate([
            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'birth_date' => 'required',
            'avatar' => 'required',
            'cv' => 'required',
            'description' => 'required|string|max:150',
            'business' => 'required',
            'country' => 'required',
            'city' => 'required',
            'worker' => 'required',

        ]);

        $post->update([
            'last_name' => $request->get('last_name'),
            'first_name' => $request->get('first_name'),
            'birth_date' => $request->get('birth_date'),
            'avatar' => $request->get('avatar'),
            'cv' => $request->get('cv'),
            'description' => $request->get('description'),
            'business' => $request->get('business'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'worker' => $request->get('worker'),
        ]);

        return view('members/update', ['members' => $members]);
    } 

}
