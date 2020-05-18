<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;
use App\User;
use App\Country;

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
        $id = 1;
        $user = User::where('id',$id)->first();
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


        $assignment = new assignment();
        $this->saveInfoToDB($request, $assignment);

        return redirect(route('editor.current.show' , $assignment->id));
    }

    /**
     * Display the specified resource.
     *
     * @param $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {

        return view('BookEngine.Editor.Assignment.EditAssignment', compact('assignment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(assignment $assignment)
    {

        return view('BookEngine.Editor.Assignment.EditAssignment', compact('assignment'));
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



        $assignment->name = $request->json('name');
        $assignment->subject = $request->json('subject');
        $assignment->course_id  = 1;
        $assignment->teacher_id = 1;
        $assignment->createdBy = \Auth::user()->name;
        $assignment->isHidden = (($request->json('isHidden')== 'on') ? true : false);
        $assignment->isLocked = (($request->json('isLocked')== 'on') ? true : false);

        $assignment->save();

        dd($request);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param \App\assignment $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {


    }

    /**
     * Save The new info to the DataBase
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\assignment $assignment
     * @return array
     */
    private function saveInfoToDB($request, $assignment){

        $request->validate([
            'title' => 'required|string',
            'subject' => 'required|string',
            'isHidden'=> 'in:on',
            'isLocked'=> 'in:on',

        ]);

        $assignment->name = $request->title;
        $assignment->subject = $request->subject;
        $assignment->course_id  = 1;
        $assignment->teacher_id = 1;
        $assignment->createdBy = 1;
        $assignment->isHidden = (($request->isHidden== 'on') ? true : false);
        $assignment->isLocked = (($request->isLocked== 'on') ? true : false);

        $assignment->save();

        $response = [
            'status' => 'success',
            'message' => 'order stored',
        ];
        return $response;

    }

    public function refreshToken(Request $request)
    {
        session()->regenerate();
        return response()->json([
            "token"=>csrf_token()],
            200);

    }
}



