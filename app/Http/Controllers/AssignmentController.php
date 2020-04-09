<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
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
        return view('BookEngine.Editor.CreateAssignment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $assignment = new assignment();
        $this->saveInfoToDB($request, $assignment);

        dd($assignment);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(assignment $assignment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(assignment $assignment)
    {
        return view('BookEngine.Editor.EditAssignment', compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assignment $assignment)
    {
        $this->saveInfoToDB($request, $assignment);

        dd($assignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {
        //
    }

    /**
     * Save The new info to the DataBase
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\assignment $assignment
     */
    private function saveInfoToDB($request, $assignment){

        $request->validate([
            'title' => 'required|string',
            'subject' => 'required|string',
            'isHidden'=> 'in:on',
            'isLocked'=> 'in:on',

        ]);

        $assignment->name = request('title');
        $assignment->subject = request('subject');
        $assignment->course_id  = 1;
        $assignment->teacher_id = 1;
        $assignment->createdBy = 1;
        $assignment->isHidden = ((request('isHidden')== 'on') ? true : false);
        $assignment->isLocked = ((request('isLocked')== 'on') ? true : false);

        $assignment->save();

    }
}


