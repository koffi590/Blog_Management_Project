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
                    ->limit(6)
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


        return redirect('/')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $updateData = $request->validate([
            'title' => 'required|string|max:255',
           'image' => 'nullable|url',
           'description' => 'required|string',
        ]);

        $article->update($updateData);
        return redirect('/')->with('success', 'Article updated successfully');

    }

    public function allArticles() {
        $articles = Article::with(['user'])
                    ->latest()
                    ->paginate(6);
        return view('articles.index', compact('articles'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with('success', 'Article deleted successfully');
    }
}
