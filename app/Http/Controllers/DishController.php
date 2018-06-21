<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishController extends Controller
{
    public function show($id)
    {
        return view('dish');
    }
}
