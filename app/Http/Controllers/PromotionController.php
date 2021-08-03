<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{    
    
    
    public function create()
    {    
        $promotions = [];
        $promotions = DB::table('promotions')
            ->select('*')
            ->get(); 
       
       
        
        return view('header' ,['promotions'=>$promotions]);


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
