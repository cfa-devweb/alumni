<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentices.index', compact('apprentices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'first_name' => 'required',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required',
            // 'deleted_at' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required'
        ]);

        $apprentice = Apprentice::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'birth_date' => $request->get('birth_date')
            // 'deleted_at' => $request->get('deleted_at'),
            // 'created_at' => $request->get('created_at'),
            // 'updated_at' => $request->get('updated_at')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apprentice  $apprentice
     * @return \Illuminate\Http\Response
     */
    public function show(Apprentice $apprentice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apprentice  $apprentice
     * @return \Illuminate\Http\Response
     */
    public function edit(Apprentice $apprentice)
    {
        return view('apprentices.edit', compact('apprentice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apprentice  $apprentice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apprentice $apprentice)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required|string|max:255',
        //     'birth_date' => 'required',
        //     // 'deleted_at' => 'required',
        //     // 'created_at' => 'required',
        //     // 'updated_at' => 'required'
        // ]);

        // $apprentice = Apprentice::update([
        //     'first_name' => $request->get('first_name'),
        //     'last_name' => $request->get('last_name'),
        //     'birth_date' => $request->get('birth_date')
        //     // 'deleted_at' => $request->get('deleted_at'),
        //     // 'created_at' => $request->get('created_at'),
        //     // 'updated_at' => $request->get('updated_at')
        // ]);

        $apprentice->update($request->all());
        return redirect(route ('admin.apprentis.index'))->with('success', 'Nouvel article crée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apprentice  $apprentice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apprentice $apprentice)
    {
        //
    }
}
