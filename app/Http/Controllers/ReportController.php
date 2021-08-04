<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $reports = DB::table('reports')
        ->select('*')
        ->get(); 
        
        return view('reports', compact('reports'));
    }

    public function show(reports $reports)
    {
        $reports = DB::table('reports')
            ->select('*')
            ->where('id', $reports->reports_id)
            ->get(); 

        return view('', compact('reports'));

        
    }
}