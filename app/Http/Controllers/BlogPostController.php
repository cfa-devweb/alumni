<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Blog_post;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {  
        $blog_posts = DB::table('blog_posts')
            ->join('users', 'blog_posts.user_id', '=', 'users.id')
            ->join('categories', 'blog_posts.categorie_id', '=', 'categories.id')
            ->select('blog_posts.*', 'users.name AS username', 'categories.name AS category')
            ->get();
        return view('actualites', ['blog_posts' => $blog_posts]);
    }

    public function show($id, Blog_post $blog_post)
    {
        $blog_post = DB::table('blog_posts')
            ->select('blog_posts.*', 'users.name AS username', 'categories.name AS category')
            ->join('users', 'blog_posts.user_id', '=', 'users.id')
            ->join('categories', 'blog_posts.categorie_id', '=', 'categories.id')
            ->where('blog_posts.id', '=', $id)
            ->first();

        $username = $blog_post->username;
        $category = $blog_post->category;
        return view('article')->with(['blog_post' => $blog_post, 'username' => $username, 'category' => $category]);
    }
}