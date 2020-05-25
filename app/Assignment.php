<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{


    /**
     * Get the course that owns the assignment.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the badge record associated with the assignment.
     */
    public function badge()
    {
        return $this->hasOne('App\Badge');
    }

    /**
     * Get the pages for the assignment.
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    /**
     * Get the teacher that created the assignment.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * The student(s) that have achieved this assignment.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_assignments');
    }

    /**
     * Get the country that belongs to the assignment.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
