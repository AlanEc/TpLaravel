<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all()->sortByDesc('created_at');
        return view('restaurant.home', ["restaurants" => $restaurants]);
    }

    public function show($id)
	{
        $restaurant = Restaurant::find($id);
        $dishes = $restaurant->dishes()->get();
        return view('restaurant.show', ["restaurant" => $restaurant, "dishes" => $dishes]);
    }

    public function create()
	{
        return view('restaurant.create');
    }

    public function manage()
	{
        $restaurants = Restaurant::all()->sortBy('id');
        return view('restaurant.manage', ["restaurants" => $restaurants]);
    }

    public function manage_dishes($id)
	{
        $restaurant = Restaurant::find($id);
        $dishes = $restaurant->dishes()->get();
        return view('restaurant.manage_dishes', ["restaurant" => $restaurant, "dishes" => $dishes]);
    }

    public function edit($id)
	{
        $restaurant = Restaurant::find($id);
		return view('restaurant.edit')->with('restaurant', $restaurant);
    }

    public function update($id)
	{
        // store
        $restaurant = restaurant::find($id);

        $restaurant->name = Input::get('name');
        $restaurant->description = Input::get('description');
        $restaurant->address = Input::get('address');
        $restaurant->phone_number = Input::get('phone_number');
        $restaurant->image = Input::get('image');
        
        $restaurant->save();

        // redirect
        return redirect('restaurant')->with([
            'message' => "Le restaurant a bien été modifié"
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request...

        $restaurant = new Restaurant;
        
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->address = $request->address;
        $restaurant->phone_number = $request->phone_number;
        $restaurant->image = $request->image;
        $restaurant->rating = 0;
        
        $restaurant->save();

        // redirect
        return redirect('restaurant')->with([
            'message' => "Le nouveau restaurant a bien été enregistré"
        ]);
    }

    public function delete($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        return redirect('restaurant')->with([
            'message' => "Le restaurant a bien été supprimé"
        ]);
    }

}
