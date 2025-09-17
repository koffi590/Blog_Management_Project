<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Embed\Embed;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['user'])
                    ->latest()
                    ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $embed= new Embed();
        $info=$embed->get($request->image);

        $request->validate([
            'title'      => 'required|string|max:255',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description'    => 'required|string',

        ]);

        Post::create([
            'title'   => $request->title,
            'image_url' => $info->image_url,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect('/')->with('success', 'Post créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
