<?php

namespace App\Http\Controllers\Auth;

use image;
use App\Models\User;
use App\Models\Member;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\Promotion_year;
use App\Models\MemberPromotion;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */


    public function create()
    {    
        $promotions = DB::table('promotions')
            ->select('*')
            ->get(); 
       
       
        
        return view('auth.register' ,['promotions'=>$promotions]);


    }
    
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            //validate for user
            'name' => 'required|string|max:255',
            'email' => 'required|string|email||max:255|unique:users',
            'email_verified_at' => 'datetime',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            //validate for member
            'last_name' => ['required', 'string', 'max:255'],
            'birth_date'=>['required','date'],
            //'avatar' => [ 'image'],
            'description' => ['string','max:500'],
            //'worker'=>['boolean','0']

            //validate for promotion
            'promotion'=>['required', 'string', 'max:255'],

            //validate for promotionYears
            'year' => 'numeric|required|min:2006|max:'.date("Y"),
        ]);


        $user = User::create([ 
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => 'datetime',
            'password' => Hash::make($request->password),
        ]);

        
        $member = Member::create([
            'first_name' => $user->name, 
            'last_name' => $request->last_name,
            'user_id' => $user->id,
            'birth_date' =>$request->birth_date,
            //'avatar' => !empty($filename) ? $filename : 'avatar.png',
            'description' => $request->description,
            //'worker' => $request->worker,
            
        ]); 
        
        $member->promotion()->associate($request->promotion_id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    

    }
   

}
