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
}
