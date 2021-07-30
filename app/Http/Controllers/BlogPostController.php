<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {  
        $blog_posts = DB::table('blog_posts')->get();
        return view('article', ['blog_posts' => $blog_posts]);
    }
}
