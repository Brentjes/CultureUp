<?php

namespace App\Http\Controllers;

use App\cases;
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
        $case = new cases();
        $case->name = request('name');
        $case->subject = request('subject');
        $case->isHidden = ((request('isHidden')== 'on') ? true : false);
        $case->isLocked = ((request('isLocked')== 'on') ? true : false);

        $case->save();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\cases $cases
     * @return \Illuminate\Http\Response
     */
    public function show(cases $cases)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\cases $cases
     * @return \Illuminate\Http\Response
     */
    public function edit(cases $cases)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\cases $cases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cases $cases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\cases $cases
     * @return \Illuminate\Http\Response
     */
    public function destroy(cases $cases)
    {
        //
    }
}
