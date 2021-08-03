<?php

namespace App\Http\Controllers;

use App\Models\Blog_post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class DashboardController extends Controller
{
    public function index(Request $request)
    {  
        $actualites = Blog_post::where('title', 'like', '%' . $request->search . '%')->get();

        return view('dashboard', compact('actualites'));
    }
}
