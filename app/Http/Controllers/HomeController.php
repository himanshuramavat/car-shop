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
        // Get all cars
        $cars = Car::get();
        dump($cars);

        // Get Published cars
        $publishedCars = Car::where('published_at','!=', null)->get();
        dump($publishedCars);

        // Get the first published car
        $firstPublishedCar = Car::where('published_at','!=', null)->first();
        dump($firstPublishedCar);


        $car = Car::find(2);

        $car = Car::orderBy('published_at','desc')->get();
        dump($car); 

        $car = Car::limit(2)->get();
        dump($car);


        $car = Car::where('published_at','!=', null)
            ->where('user_id', 2)
            ->orderBy('published_at','desc')
            ->limit(3)
            ->get();
        dump($car);
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
