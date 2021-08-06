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
        //
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
        $apprentice->update($request->all());

        return redirect()->route('admin.apprentis.index');
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
