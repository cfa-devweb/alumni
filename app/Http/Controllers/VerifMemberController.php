<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;




class VerifMemberController extends Controller
{
    public function index()
    {
        return view('verifmember');
    }

    public function verify(Request $request)
    {
        if (DB::table('cci')
        ->where('last_name', $request->input('last_name'))
        ->where('first_name', $request->input('first_name'))
        ->where('birth_date', $request->input('birth_date'))
        ->exists()) 
        {
        return view ('auth.register');
        }
        else
        {
        return view('welcome');  
        }
    }
}









// $validator = Validator::make($request->all(), [
//     'Info' => [ 'required',
//         Rule::exists('person')->where(function ($query) {
//             $query->where('last_name', "");
//             $query->where('first_name', "");
//             $query->where('birth_date', date);
//         }),
//     ],
// ]);






// class VerifMemberController extends Controller
// {
//     //
//     public function index()
//     {
//         return view('verifmember');
//     }

//     public function verify(Request $request)
//     {
//         $request->validate([
//             'userlastname' => 'required|exists:person,last_name',
//             'userfirstname' => 'required|exists:person,first_name',
//             'userbirthdate' => 'required|exists:person,birth_date', 
//         ]);
//     }
// }
