<?php

namespace App\Http\Controllers\Teacher;

use App\Course;
use App\Teacher;
use App\TeacherCourse;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('courses')
            ->leftJoin('teacher_course', 'teacher_course.course_id', '=', 'courses.id')
            ->select('courses.id', 'courses.name', 'teacher_course.teacher_id')->get();
        return view('teacher.courses')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $teacher = Teacher::where('user_id', Auth::id())->first();
        $course = Course::where('id', $request->course_id)->first();

        $course->teachers()->attach($teacher->id);

        return redirect()->route('teacher.courses.index')->with('success',"You are now following {$course->name}!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::where('id', $id)->first();
        $teacher = Teacher::where('user_id', Auth::id())->first();
        $teacher->courses()->detach($id);
        return redirect()->route('teacher.courses.index')->with('success',"You are no longer following {$course->name}!");
    }
}
