<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Page;
use Illuminate\Http\Request;
use App\Element;
use App\Text;
use App\Image;
use App\Link;
use App\Question;
use App\Answer;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($assignment, $page)
    {
        dd($assignment);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Assignment $assignment
     * @param Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Assignment $assignment, Page $page)
    {
        return view ('BookEngine.Editor.Element.CreateElement', ['assignmentID'=>$assignment, 'pageID'=>$page,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Assignment $assignment
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Assignment $assignment, Page $page)
    {
        if(!isset(\Auth::user()->teacher)){
            return view('errors.404');
        }
    dd($assignment);
        if($page->assignment->id !== $assignment->id){
            return 'Page isnt owned by this assingment or or this page doesnt belong to this assingment';
        }

        //gather postion x and y from element data-x and data-y

        $request->validate([
            'positionX' => 'required|numeric',
            'positionY' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'type' => 'required|string'
        ]);
        $element = new Element();
        $element->positionX = $request->positionX;
        $element->positionY = $request->positionY;
        $element->width = $request->width;
        $element->height = $request->height;
        $element->page_id = $page->id;
        switch ($request->type) {
            case 'Text':
                $element->type = $request->type;
                $request->validate([
                    'text' => 'required|string'
                ]);
                $type = new Text();
                $type->text = $request->text;

                break;
            case 'Link':
                $element->type = $request->type;
                $type = new Link();
                $request->validate([
                    'page_id' => 'required|numeric'
                ]);

                $pageLink = Page::findOrFail($request->page_id);
                if($pageLink->assignment_id !== $page->assignment_id){
                    return 'Linked Page isnt from the same assingment';
                }
                $type->page_id = $pageLink->id;


                break;
            case 'Image':
                $element->type = $request->type;
                $request->validate([
                    'alt' => 'required|string',
                    'image' => 'required|image'
                ]);
                $type = new Image();
                $type->alt = $request->alt;
                $type->image = $request->image;

                break;
            case 'Question':
                $element->type = $request->type;



                break;
            default;
            $returnMessage = 'Type is not defined or Incorrect'.($request->type?$request->type:'undefined');
                return $returnMessage;
            break;
        }

        $element->save();
        $type->element_id = $element->id;
        $type->save();
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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
        if(!isset(\Auth::user()->teacher)){
            return view('errors.404');
        }
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
        if(!isset(\Auth::user()->teacher)){
            return view('errors.404');
        }
        //
    }
}
