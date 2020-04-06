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
}
