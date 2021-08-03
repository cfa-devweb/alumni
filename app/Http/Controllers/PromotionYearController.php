<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionYearController extends Controller
{
    public function index()
    {
        $promotionYear = DB::table('promotion_years')
        ->select('*')
        ->get(); 
        
        return view('register', compact('promotionYears'));
    }

    public function show(PromotionYear $promotionYear)
    {
        $promotionYear = DB::table('promotion_years')
            ->select('*')
            ->where('id', $promotionYear->promotionYear_id)
            ->get(); 

        return view('regist.show', compact('promotionYears'));

        
    }
}
