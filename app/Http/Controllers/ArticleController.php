<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        
        //dd($article);
        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author
        ]);
        return redirect(route('index'))->with('message', 'Hai inserito correttamente un articolo');
    }

    public function index(){
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }
}
