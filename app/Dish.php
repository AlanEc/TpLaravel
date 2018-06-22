<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Dish extends Model
{
    use Searchable;
    /**
     * Get the Restaurant that plublishes the dishes.
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
