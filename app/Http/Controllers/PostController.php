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
        return view('articles', compact('posts'));
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
            'categorie_id' => 'required',
            'sticky_post' => 'required',
            'visibility' => 'required'
        ]);

        $post = Post::create([
            'user_id' => $request->get('user_id'),
            'title' => $request->get('title'),
            'sticky_post' => $request->get('sticky_post'),
            'content' => $request->get('content'),
            'categorie_id' => $request->get('categorie_id'),
            'visibility' => $request->get('visibility')
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
            'sticky_post' => 'required',
            'visibility' => 'required'
        ]);

        $post->update([
            'title' => $request->get('title'),
            'sticky_post' => $request->get('sticky_post'),
            'content' => $request->get('content'),
            'visibility' => $request->get('visibility')
        ]);

        return redirect()->route('articles.index')->with('success', 'Article édité avec succès !');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès !');
    }
}