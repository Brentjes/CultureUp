<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Get the assignment that the page belongs to.
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    /**
     * Get the elements that belong to this page.
     */
    public function elements()
    {
        return $this->hasMany(Element::class);
    }

    /**
     * Get the link record associated with the page.
     */
    public function link()
    {
        return $this->hasOne('App\Link');
    }
}
