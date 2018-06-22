<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Restaurant;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all()->sortByDesc('created_at');
        return view('dish.home', ["dishes" => $dishes]);
    }

    public function show($id)
	{
        $dish = Dish::find($id);
        $restaurant = $dish->restaurant;
        return view('dish.show', ["dish" => $dish, "restaurant" => $restaurant]);
    }

    public function create()
	{
        $restaurants = Restaurant::all();
        return view('dish.create', ["restaurants" => $restaurants]);
    }

    public function manage()
	{
        $dishes = Dish::all()->sortBy('id');
        return view('dish.manage', ["dishes" => $dishes]);
    }

    public function edit($id)
	{
        $dish = Dish::find($id);
		return view('dish.edit')->with('dish', $dish);
    }

    public function update(Request $request, $id)
	{
        // store
        $dish = restaurant::find($id);

        $dish->name = $request->input('name');
        $dish->description = $request->input('description');
        $dish->price = $request->input('price');
        $dish->image = $request->input('image');
        
        $dish->save();

        // redirect
        return redirect()->route('manage_dish')->with([
            'message' => "Le plat a bien été modifié"
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request...

        $dish = new Dish;
        
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->image = $request->image;
        
        $dish->restaurant_id = $request->id;

        // $restaurant = Restaurant::find($request->id);
        // $dish->restaurant()->save($restaurant);
        
        $dish->save();

        // redirect
        return redirect('dish')->with([
            'message' => "Le nouveau plat a bien été enregistré"
        ]);
    }

    public function delete($id)
    {
        $dish = Dish::find($id);
        $dish->delete();

        return redirect('dish')->with([
            'message' => "Le plat a bien été supprimé"
        ]);
    }

}
