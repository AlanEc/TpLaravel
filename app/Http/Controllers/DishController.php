<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all()->sortBy('created_at');
        return view('dish.home', ["dishes" => $dishes]);
    }

    public function show($id)
	{
        $dish = Dish::find($id);
		return view('dish.show')->with('dish', $dish);
    }

    // public function create()
	// {
    //     return view('offers.create');
    // }

    // public function store(Request $request)
    // {
    //     // Validate the request...

    //     $offer = new Offer;
        
    //     $offer->title = $request->title;
    //     $offer->description = $request->description;
    //     $offer->address = '';
    //     $offer->phone_number = '';
    //     $offer->image = $request->image;
    //     $offer->author = '';
    //     // $offer->created_at = now();
        
    //     $offer->save();

    //     return redirect('offers')->with([
    //         'message' => "Votre offre a bien été enregistrée"
    //     ]);
    // }
}
