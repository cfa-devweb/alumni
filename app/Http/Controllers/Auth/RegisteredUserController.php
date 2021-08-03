<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Member;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\Promotion_year;
use App\Models\MemberPromotion;
use Illuminate\Validation\Rules;
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
        return view('auth.register');
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            //validate for member
            'last_name' => ['required', 'string', 'max:255'],
            //'avatar' => [ 'mimes:jpg,jpeg,png','dimensions:min_width=100,min_height=200','max:300'],
            'description' => ['string','max:500'],
            //'worker'=>['boolean']

            //validate for promotion
            //'promotion'=>['required', 'string', 'max:255'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        $member = Member::create([
            'first_name' => $user->name,
            'last_name' => $request->last_name,
            'user_id' => $user->id,
            //'avatar' => $request->avatar,
            'description' => $request->description,
            //'worker' => $request->worker,
            
        ]); 
        
        $promotion = Promotion::create([
            
            'name' => $request->promotion,
            
        ]); 
        
        /*$promotionYear = Promotion_year::create([
            'year'=>$request->year,
            'promotion_id'=>$promotion->id
            
        ]); 

        $memberPromotion = MemberPromotion::create([
            'member_id' => $member->user_id,
            'promotion_year_id' => $promotionYear->id,
            
        ]); */
        
       
        event(new Registered($user));
        event(new Registered($member));
        event(new Registered($promotion));
        //event(new Registered($memberPromotion));
        //event(new Registered($promotionYear));

        $user->save();
        $member->save();
       // $promotion->save();
       // $memberPromotion->save();
       // $promotionYear->save();

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        
        
        
    }
}
