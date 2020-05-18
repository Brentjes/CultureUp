<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Student;
use App\Course;
use App\Teacher;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::where('user_id', Auth::id())->first();
        $courses = $teacher->courses;
        $course = $courses[0];

        $students =
            DB::table('students')
                ->select('users.id', 'users.name', 'users.email', 'students.course_id', 'students.score', 'courses.name as course_name')
                ->join('teacher_course', 'students.course_id', '=', 'teacher_course.course_id')
                ->leftJoin('users', 'users.id', '=', 'students.user_id')
                ->rightJoin('courses', 'courses.id', '=', 'teacher_course.course_id')
                ->where('teacher_course.teacher_id', '=', $teacher->id)->get();
        $students = $course->students;
        $assignments = DB::table('student_assignment')
            ->select('assignments.id', 'assignments.name', 'assignments.subject')
            ->rightJoin('assignments', 'assignments.id', '=', 'student_assignment.assignment_id')->get();
//        return dd($students); $assignments(ID)
        return view('teacher.progress')->with('students', $students)->with('assignments', $assignments);
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
