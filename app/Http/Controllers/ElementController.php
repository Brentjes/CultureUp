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
        dd($page);
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

        return view ('bookEngine.Editor.Element.CreateElement', ['assignment'=>$assignment, 'page'=>$page,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Assignment $assignmentID
     * @param Page $page
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Assignment $assignment, Page $page)
    {
        //$assingment returns the value that page should be
        //and $page returns the value that assignment should be
        if(!isset(\Auth::user()->teacher)){
            return abort(404);
        }

        if($page->assignment->id !== $assignment->id){
            return 'Page isnt owned by this assingment or or this page doesnt belong to this assingment';
        }
//        dd($request);
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
            case 'text':
                $element->type = $request->type;
                $request->validate([
                    'text' => 'required|string'
                ]);
                $type = new Text();
                $type->text = $request->text;


                break;
            case 'link':
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
//            case 'image':
//                $element->type = $request->type;
//                $request->validate([
//                    'alt' => 'required|string',
//                    'image' => 'required|image'
//                ]);
//                $type = new Image();
//                $type->alt = $request->alt;
//                $type->image = $request->image;
//
//                break;
            case 'question':

                $element->type = $request->type;
//                dd($request);
                $request->validate([
                    'question' => 'required|string',
                    'answers' => 'required|array|between:2,5',
                    'answers.*.answer' => 'required|string',
                    'answers.*.isCorrect' => 'in:on',
                    'score' => 'required|numeric'
                ]);

                $type = new Question();
                $type->question = $request->question;
                $type->score = $request->score;


                $allAnswer = [];

    //                for ($i = 0; $i < sizeof($request->answers); $i++) {
    //                    dd($request->answers[$i]);
    //                }
                if(isset($request->answers) && (count($request->answers) >= 2)) {
                    foreach ($request->answers as $answerReq) {



                        $answer = new Answer();
                        $answer->answer = $answerReq['answer'];
                        if(isset($answerReq['isCorrect'])){


                        $answer->isCorrect = (($answerReq['isCorrect'] === 'on') ? true : false);
                        } else {
                            $answer->isCorrect = false;
                        }

                        array_push($allAnswer, $answer);

                    }
                } else {
                    return 'not enough answers';
                }
                break;
            default;
            $returnMessage = 'Type is not defined or Incorrect '.($request->type?$request->type:'undefined');
                return $returnMessage;
            break;
        }

        $element->save();
        $type->element_id = $element->id;
        $type->save();
        if($element->type === 'question'){

            foreach ($allAnswer as $answer){
                $answer->question_id = $type->id;
                $answer->save();
            }
        }

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
            return abort(404);
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
            return abort(404);
        }
        //
    }
}
