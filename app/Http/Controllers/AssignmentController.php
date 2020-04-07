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
        return view('welcome');
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
        $assignment->name = request('name');
        $assignment->subject = request('subject');
        $assignment->isHidden = ((request('isHidden')== 'on') ? true : false);
        $assignment->isLocked = ((request('isLocked')== 'on') ? true : false);

        $assignment->save();
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
        //
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
}
