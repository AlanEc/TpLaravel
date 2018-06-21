<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * Get the Restaurant that plublishes the dishes.
     */
    public function Restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
