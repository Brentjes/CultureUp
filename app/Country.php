<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function getRouteKeyName()
    {
        return 'country';
    }
    /**
     * The assignment(s) that belong to the country.
     */
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
