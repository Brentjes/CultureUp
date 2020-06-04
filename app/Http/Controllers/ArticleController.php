<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('article.articles', compact('articles'));

//        $articles = \App\Article::all();
//
//        return view ('/articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('article.create');

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | min: 5 | max: 50 | string',
            'excerpt' => 'required | min: 25 | max: 255 | string',
            'text' => 'required | min: 5 | max: 2000 | string',
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->text = $request->text;
        $article->user_id = \Auth::user()->id;

        $article->save();

        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        request()->validate([
            'title' => 'required | min: 5 | max: 50 | string',
            'excerpt' => 'required | min: 25 | max: 255 | string',
            'text' => 'required | min: 5 | max: 2000 | string',
        ]);

        $article = Article::find($id);
//        $article = $this->update(Article) ;
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->text = request('text');
        $article->user_id = \Auth::user()->id;

        $article->save();

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }


    protected function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'min:5', 'max: 40', 'string'],
            'excerpt' => ['required', 'min:10', 'max:255', 'string'],
            'text' => ['required', 'min:10', 'max:300000', 'string'],
        ]);
    }
}
