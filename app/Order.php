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
}
