<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {  
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'promoted' => 'required',
            'visible' => 'required'
        ]);

        $post = Post::create([
            'user_id' => $request->get('user_id'),
            'title' => $request->get('title'),
            'promoted' => $request->get('promoted'),
            'content' => $request->get('content'),
            'category_id' => $request->get('category_id'),
            'visible' => $request->get('visible')
        ]);

        $post->save();
        return redirect('/articles/'.$post->id)->with('success', 'Nouvel article crée avec succès !');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {   
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'promoted' => 'required',
            'visible' => 'required'
        ]);

        $post->update([
            'title' => $request->get('title'),
            'promoted' => $request->get('promoted'),
            'content' => $request->get('content'),
            'visible' => $request->get('visible')
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article édité avec succès !');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès !');
    }
}