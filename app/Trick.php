<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trick extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
