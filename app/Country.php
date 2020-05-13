<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The assignment(s) that belong to the country.
     */
    public function countries()
    {
        return $this->hasMany(Assignment::class);
    }
}
