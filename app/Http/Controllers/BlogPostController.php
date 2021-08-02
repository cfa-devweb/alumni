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

    public function create() 
    {
        return view('formPost');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'sticky_post' => 'required',
            'visibility' => 'required'
        ]);

        $blog_post = new Blog_post([
            'user_id' => $request->get('user_id'),
            'title' => $request->get('title'),
            'sticky_post' => $request->get('sticky_post'),
            'content' => $request->get('content'),
            'categorie_id' => $request->get('categorie_id'),
            'visibility' => $request->get('visibility')
        ]);

        $blog_post->save();
        return redirect('/actualites')->with('success', 'Article crée !');
    }

    public function edit($id)
    {
        $blog_post = Blog_post::findOrFail($id);
        return view('editPost', compact('blog_post'));
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}