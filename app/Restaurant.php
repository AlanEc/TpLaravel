<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Restaurant extends Model
{
    use Searchable;
    /**
     * Get the dishes associated with the restaurant.
     */
    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
    
}
