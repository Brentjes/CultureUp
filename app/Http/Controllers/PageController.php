<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Element;

class PageController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $types = ['link', 'img', 'text'];
        $elements = [];
        for ($counter = 0; $counter < 10; $counter++) {
            $element = new Element;
            $element->type = $types[rand(0,2)];
            if($element->type == 'link'){
                $element->linkPage = 'http://www.google.com';
            } else if($element->type == 'text'){
                $element->text = 'test';
            } else if($element->type == 'img'){
                $element->imgSrc = 'https://steamuserimages-a.akamaihd.net/ugc/808804068649773216/DEB0B6AC2CFE49799059F277E5C7DCA22AB0C227/?imw=1024&imh=1024&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true';
            }
            $element->left = rand(0,900);
            $element->top = rand(0,900);
            if($element->type == 'img'){
                $element->height = 'auto';
            } else {
                $element->height = rand(200,500);
            }
            $element->width = rand(200,500);
            array_push($elements, $element);

}
$Page = new Page;
        $Page->Elements = $elements;
return view('BookEngine.Page',compact('Page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
