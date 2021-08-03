<?php

namespace App\Http\Controllers;

use App\Models\Blog_post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ArchiveController;





class DashboardarchiveController extends Controller
{
    public function index()
    {  

        $actualites = DB::table('blog_posts')
            ->join('users', 'blog_posts.user_id', '=', 'users.id')
            ->join('categories', 'blog_posts.categorie_id', '=', 'categories.id')
            ->select('blog_posts.*', 'users.name AS username', 'categories.name AS category')
            ->get();
            // dd ($actualites);
            return view('dashboardArchive', ['actualites'=>$actualites]);
    }


}
        
    
