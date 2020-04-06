<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get the element(s) this image is used for.
     */
    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
