<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2020,
        //     'price' => 10000,
        //     'vin' => '1234567890',
        //     'mileage' => 10000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => '123 Main St',
        //     'phone' => '123-456-7890',
        //     'description' => 'This is a car',
        //     'published_at' => now(),
        // ];

        // //Approach 1
        // $car = Car::create($carData);

        // //Approach 2
        // $car = new Car();
        // $car->fill($carData);
        // $car->save();

        // //Approach 3
        // $car = new Car($carData);
        // $car->save();


        // $car = Car::find(1);
        // $car->price = 20000;
        // $car->save();

        
        
        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2020,
        //     'price' => 10000,
        //     'vin' => '1234567890',
        //     'mileage' => 10000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => '123 Main St',
        //     'phone' => '123-456-7890',
        //     'description' => 'This is a HImanshu\'s car',
        //     'published_at' => now(),
        // ];
        // Car::updateOrCreate(
        //     ['vin' => '9999', 'price' => 10000],
        //     $carData
        // );

        
        // Car::where('published_at', null)
        // ->where('user_id', 1)
        // ->update(['published_at' => now()]);


        $car = Car::find(1);
        $car->delete();
        
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
