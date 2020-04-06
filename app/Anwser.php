<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anwser extends Model
{
    /**
     * Get the question that this anwser belongs to.
     */
    public function post()
    {
        return $this->belongsTo(Question::class);
    }
}
