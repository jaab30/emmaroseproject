<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function reviews() 
    {
        return $this->hasMany('App\Review');
    }
}
