<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Element;

class PageEditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();

        $this->verifySave($page, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {


        $types = ['link', 'img', 'text'];
        $elements = [];
        for ($counter = 0; $counter < 5; $counter++) {
            $element = new Element;
            $element->type = $types[rand(0,2)];
            if ($element->type == 'link') {
                $element->linkPage = 'http://www.google.com';
                $element->height = rand(5, 40) . 'vh';
                $element->width = rand(5, 40) . 'vw';
            } else if ($element->type == 'text') {
                $element->text = 'test';
                $element->height = rand(5, 40) . 'vh';
                $element->width = rand(5, 40)  . 'vw';
            } else if ($element->type == 'img') {
                $element->imgSrc = 'https://picsum.photos/id/' . rand(1, 300) . '/500/500';
                $element->width = rand(5, 40) . 'vw';
                $element->height = rand(5, 40) . 'vh';
            }
            $element->left = rand(0, 80);
            $element->top = rand(0, 80);
            array_push($elements, $element);
        }
        $page = new Page;
        $page->elements = $elements;
        return view('BookEngine.Editor.editor', compact('page'));
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
     * @param Page $page
     * @return void
     */
    public function update(Request $request, Page $page)
    {
        $this->verifySave($page, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Page $page)
    {
        $page->delete();
    }

    /**
     * Save The new info to the DataBase
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\page $page
     */
    private function verifySave($page, $request){

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $page->title = $request->title;
        $page->description = $request->description;

        $page->save();
}
}
