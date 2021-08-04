<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {  
        $blog_posts = BlogPost::all();
        return view('actualites', compact('blog_posts'));
    }

    public function show(BlogPost $blog_post)
    {
        $username = $blog_post->username;
        $category = $blog_post->category;
        return view('article', ['blog_post' => $blog_post, 'username' => $username, 'category' => $category]);
    }

    public function create() 
    {
        return view('formPost');
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

        $blog_post = BlogPost::create([
            'user_id' => $request->get('user_id'),
            'title' => $request->get('title'),
            'sticky_post' => $request->get('sticky_post'),
            'content' => $request->get('content'),
            'categorie_id' => $request->get('categorie_id'),
            'visibility' => $request->get('visibility')
        ]);

        $blog_post->save();
        return redirect('/actualites/'.$blog_post->id)->with('success', 'Nouvel article crée avec succès !');
    }

    public function edit(BlogPost $blog_post)
    {
        return view('editPost', compact('blog_post'));
    }

    public function update(Request $request, BlogPost $blog_post)
    {   
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'sticky_post' => 'required',
            'visibility' => 'required'
        ]);

        $blog_post->update([
            'title' => $request->get('title'),
            'sticky_post' => $request->get('sticky_post'),
            'content' => $request->get('content'),
            'visibility' => $request->get('visibility')
        ]);

        return redirect()->route('actualites.index')->with('success', 'Article édité avec succès !');
    }

    public function destroy(BlogPost $blog_post)
    {
        $blog_post->delete();

        return redirect()->route('actualites.index')->with('success', 'Article supprimé avec succès !');
    }
}