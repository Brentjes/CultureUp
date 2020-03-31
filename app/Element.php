<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    private $type;

    public function Page(){

        return $this->belongsTo(Page::Class);

    }
}
