<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Teacher;
use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\Auth;

class AssignmentEditorController extends Controller
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
//        if(!\Auth::user()->teacher){
//            abort(403);
//        }
//
//        if(\Auth::user()->teacher->id !== $assignment->teacher_id){
//            abort(403);
//        }
        // Check if enrolled as a teacher
        $teacher = Teacher::where('user_id', Auth::id())->first();
        if ($teacher == null) {
            return redirect()->route('teacher.index')->with(
                'warning',
                'You need to be enrolled as a teacher in order to view the progression page'
            );
        }

        $countries = Country::all();
        return view('BookEngine.Editor.Assignment.CreateAssignment', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //IMPORTANT, ALLOW CHOOSING COURSE SAME FOR UPDATE


        $request->validate([
            'title' => 'required|string',
            'subject' => 'required|string',
            'isHidden'=> 'in:on',
            'isLocked'=> 'in:on',
            'country' =>'required|numeric'
        ]);

        $assignment = new Assignment();
        $assignment->name = $request->title;
        $assignment->subject = $request->subject;
        if(count(\Auth::user()->teacher->courses) > 1){

            $request->validate([
                'course' => 'required|numeric'
            ]);

            $assignment->course_id = $request->course;

        } else if(count(\Auth::user()->teacher->courses) === 0){
            abort(500);}
        else {
            $assignment->course_id  = \Auth::user()->teacher->courses[0]->id;
        }

        $assignment->teacher_id = \Auth::user()->teacher->id;
        $assignment->createdBy = \Auth::user()->name;
        $assignment->country_id = $request->country;
        $assignment->isHidden = (($request->isHidden== 'on') ? 1 : 0);
        $assignment->isLocked = (($request->isLocked== 'on') ? 1 : 0);

        $assignment->save();

        return redirect(route('editor.current.show', ['assignment' => $assignment->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        $countries = Country::all();
        return view('BookEngine.Editor.Assignment.EditAssignment', ['countries'=>$countries, 'assignment'=>$assignment]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(assignment $assignment)
    {

    }



    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'isHidden'=> 'required|boolean',
            'isLocked'=> 'required|boolean',
            'country' =>'required|numeric'
        ]);


        $assignment->name = $request->json('name');
        $assignment->subject = $request->json('subject');
        if(count(\Auth::user()->teacher->courses) > 1){
            $request->validate([
                'course_id' => 'required|numeric'
            ]);
            $assignment->course_id = $request->course_id;
        }
        $assignment->country_id = $request->country;
        $assignment->isHidden = $request->isHidden;
        $assignment->isLocked = $request->isLocked;

        $assignment->save();


        return 'success';
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {
        $assignment->delete();
        return 'success';

    }
}



