<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    } 
    
    public function create(){
        return view('article.create');
    }

    public function store(ArticleRequest $request){
        
        if($request->image){
            //dd($article);
            $article = Article::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $request->file('image')->store('public/image'),
                'user_id' => Auth::user()->id,
            ]);
        }else {
            $article = Article::create([
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
            ]);
        }
        //dd($request->all());
        return redirect(route('index'))->with('message', 'Hai inserito correttamente un articolo');
    }

    public function index(){
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }
}
