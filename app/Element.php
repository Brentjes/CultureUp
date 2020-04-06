<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    /**
     * Get the page this element belongs to.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Get the question this element belongs to.
     */
    public function question()
    {
        return $this->hasOne('App\Question');
    }

    /**
     * Get the text this element belongs to.
     */
    public function text()
    {
        return $this->hasOne('App\Text');
    }
}
