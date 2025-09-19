<?php

namespace App\Http\Controllers;

use App\Models\Comment;
// use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::All();
        return view('articles.show', compact("comment"));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $resquest = validate([

    //     ])
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'   => 'required|string|max:1000',
            'article_id'   => 'required|exists:articles,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);
        
        Comment::create([
            'content'   => $request->content,
            'article_id'   => $request->article_id,
            'user_id'   => Auth::id(),
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'comment deleted successfully');
    }
}
