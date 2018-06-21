<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getList()
    {
        return view('restaurants');
    }

    public function show($id)
    {
        return view('restaurant');
    }
}
