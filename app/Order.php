<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get the User that make the orders.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the dishes associated with the order.
     */
    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
}
