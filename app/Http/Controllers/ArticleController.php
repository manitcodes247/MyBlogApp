<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller{
    public function index(){
        $articles = Article::latest()->paginate(5);
        return view('dashboard.list-view', compact('articles'));
    }

    public function create(){
        return view('dashboard.create-article');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article){
        return view('dashboard.show-article', compact('article'));
    }

    public function edit(Article $article){
        return view('dashboard.edit-article', compact('article'));
    }

    public function update(Request $request, Article $article){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
