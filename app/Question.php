<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Get the element that owns the question.
     */
    public function element()
    {
        return $this->belongsTo('App\Element');
    }

    /**
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * The student(s) that have answered this question.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_question');
    }
}
