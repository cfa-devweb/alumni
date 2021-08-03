<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{    
    
    
    public function index()
    {    
        
        $promotions = DB::table('promotions')
            ->select('*')
            ->get(); 
       
       
        
        return view('partials/header' ,['promotions'=>$promotions]);
       dd($promotions);

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
