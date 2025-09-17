<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
        return view('welcome', compact('articles'));
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
        // $embed= new Embed();
        // $info=$embed->get($request->image);

        $request->validate([
            'title' => 'required|string|max:255',
           'image' => 'nullable|url',
            'description' => 'required|string',

        ]);

        Article::create([
            'title'   => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

            
        return redirect('/')->with('success', 'Article create successfully.');
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
