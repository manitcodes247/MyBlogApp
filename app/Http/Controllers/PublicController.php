<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function index(){
        $articles = Article::latest()->paginate(10);
        return view('public.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        return view('public.show', compact('article'));
    }
}
