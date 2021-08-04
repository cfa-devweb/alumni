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
        $promotions = Promotion::all(); 
       
        return view('partials.membersPage' ,['promotions' => $promotions]);
    }

    public function show(Promotion $promotion)
    {
        return view('promotion.show', compact('promotions'));  
    }
}
