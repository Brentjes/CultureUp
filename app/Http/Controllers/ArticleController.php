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

        return view('articles', compact('articles'));

//        $articles = \App\Article::all();
//
//        return view ('/articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * <<<<<<< HEAD
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
//        'title' => ['required', 'min:5', 'max: 40', 'string'],
//            'excerpt' => ['required', 'min:10', 'max:255', 'string'],
//            'text' => ['required', 'min:10', 'max:300000', 'string'],

//        $article = Article::create($this->validateArticle());
        $request -> validate([
            'title' => 'required | min: 5 | max: 50 | string',
            'excerpt' => 'required | min: 25 | max: 255 | string',
            'text' => 'required | min: 5 | max: 2000 | string',
        ]);
        $article = new Article();
        $article -> title = $request -> title;
        $article -> excerpt = $request -> excerpt;
        $article -> text = $request -> text;
        $article -> user_id = \Auth::user()->id;

        $article -> save();

        return redirect('/articles');

//        return request()->all();
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
