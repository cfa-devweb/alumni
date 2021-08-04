<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    public function index(){    
        
        $categories = DB::table('categories')
            ->select('*')
            ->get();        
        return view('categories.index',['categories'=>$categories]);      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'Name' => 'required',
            
        ]);
    
        Categorie::create([
            'Name' => $request->name
        ]);
     
        return redirect()->route('categories.index')
                        ->with('success','Categorie created successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $Categorie)
    {
        $request->validate([
            'Name' => 'required',
            'description' => 'required',
        ]);
    
        $Categorie->update($request->all());
    
        return redirect()->route('categories.index')
                        ->with('success','Categorie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $Categorie)
    {
        $Categorie->delete();
    
        return redirect()->route('categories.index')
                        ->with('success','Categorie deleted successfully');
    }
}

