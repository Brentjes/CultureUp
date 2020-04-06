<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Get the page that belongs to the link.
     */
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
