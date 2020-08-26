<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug'; //Article::where('slug', $article)->first()
    // }
}
