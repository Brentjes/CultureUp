<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The student(s) that belong to the course.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * The teacher(s) that belong to the course.
     */
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_course');
    }
}
