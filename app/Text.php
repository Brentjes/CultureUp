<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    /**
     * Get the element that the text belongs to.
     */
    public function element()
    {
        return $this->belongsTo('App\Text');
    }
}
