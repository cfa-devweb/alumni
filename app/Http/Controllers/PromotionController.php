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
       
        return view('promotions.index', compact('promotions'));
    }

    public function create()
    {
        return view('promotions.create', compact('promotions'));
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('promotions.edit', compact('promotions'));
    }
}
