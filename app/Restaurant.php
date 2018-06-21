<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * Get the dishes associated with the restaurant.
     */
    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
    
}
