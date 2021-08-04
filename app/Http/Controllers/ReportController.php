<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $reports = DB::table('reports')
        ->select('*')
        ->get(); 
        
        return view('reports.index', compact('reports'));
    }

    public function destroy(Report $report)
    { 
        $report->delete();
        return redirect()->back();
    }
}