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
     * Get the anwsers for the question.
     */
    public function anwsers()
    {
        return $this->hasMany(Anwser::class);
    }
}
