<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The user that belongs to the teacher.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The course(s) that belong to the teacher.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course');
    }

    /**
     * The assignment(s) that belong to the teacher.
     */
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
