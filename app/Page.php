<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function Elements(){

        return $this->hasMany(Element::Class);
    }
}
