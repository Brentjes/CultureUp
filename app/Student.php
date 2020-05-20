<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The user that belongs to the student.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The course that belongs to the student.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * The assignments that belong to the student.
     */
    public function assignments()
    {
        return $this->belongsToMany(Assignment::class, 'student_assignment')->using(StudentAssignment::class)->withPivot(['progress',]);;
    }


    /**
 * The badges that belong to the student.
 */
    public function badges()
    {
        return $this->belongsToMany(Badge::class, 'student_badge');
    }

}
