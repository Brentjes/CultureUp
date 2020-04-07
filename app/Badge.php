<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    /**
     * The student(s) that have achieved this badge.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_badge');
    }

    /**
     * Get the assignment this badge belongs to.
     */
    public function user()
    {
        return $this->belongsTo('App\Assignment');
    }
}
