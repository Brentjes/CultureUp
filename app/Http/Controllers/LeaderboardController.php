<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $students = DB::select('
//        SELECT users.name, courses.name AS course, SUM(student_assignment.progress) AS score FROM student_assignment
//
//        LEFT JOIN students
//        ON students.id = student_assignment.student_id
//
//        LEFT JOIN courses
//        ON courses.id = students.course_id
//
//        LEFT JOIN users
//        ON users.id = student_assignment.student_id
//
//            GROUP BY student_assignment.student_id
//            ORDER BY score DESC
//    ');

        $students = Student::paginate(15);
        //this is bad, but time constraints
        //sums all the students assingments scores
        foreach($students as $student){
            $Array = [];

            foreach($student->assignments as $assignment){
                array_push($Array, $assignment->pivot->progress);
            };
            if($Array = []){
                $Array = [0];
            }
           $student->Score =  array_sum($Array);
        }


        return view('home.leaderboard')->with('students', $students);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
