<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{    
    
    
    public function index()
    {
        $promotion = DB::table('promotions')
        ->select('*')
        ->get(); 
        return view('register', compact('promotions'));
    }

    public function show(Promotion $promotion)
    {
        $promotion = DB::table('promotions')
            ->select('*')
            ->where('id', $promotion->promotion_id)
            ->get(); 

        return view('promotion.show', compact('promotions'));

        
    }
}
