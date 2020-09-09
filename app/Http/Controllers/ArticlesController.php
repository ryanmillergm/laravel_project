<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();

        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // $article = Article::findorfail($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // $validatedAttrubutes = request()->validate([
        //     'title' => ['required', 'min:3', 'max:255'],
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);

        // Responsible for persisting the new Article
        // dump(request()->all());
        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // $article = Article::find($id);

        // return view('articles.edit', ['article' => $article]);
        // PHP compact function does the same as above
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        // return redirect('/articles/' . $article->id);
        // return redirect(route('articles.show', $article));
        // return redirect()->route('articles.show', $article);
        return redirect($article->path());
    }

    public function destroy($id)
    {
        // $article = Article::find($id);

    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
