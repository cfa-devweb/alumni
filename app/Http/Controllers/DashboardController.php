<?php

namespace App\Http\Controllers;

use Members;
use App\Models\User;
use App\Models\Member;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $actualites = BlogPost::where('title', 'like', '%' . $request->search . '%')->get();
        $categories = Category::all();
        $members = Member::all(); 
        $promotions = Promotion::all();

        return view('dashboard.index', compact('actualites', 'categories', 'members', 'promotions'));
    }

    public function user(Request $request)
    {
        $user = $request->user();
        return view('dashboard.user', ['user' => $user]);
    }
} 
