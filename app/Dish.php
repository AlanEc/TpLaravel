<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    /**
     * Get the Restaurant that plublishes the dishes.
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    /**
     * Get the order that contains the dishes.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
