<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{    

    public function create()
    {
        return view('promotions.create');
    }

    public function show()
    {
        //return view('promotions.edit');
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('promotions.edit', compact('promotion'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|max:4',
        ]);

        $promotion = Promotion::create($validatedData);

        return redirect('/dashboard')->with('success', 'Promotion créée avec succès.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|max:4',
        ]);

        Promotion::whereId($id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Promotion correctement mise à jour.');
    }
}
