<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\FuelType;
use App\Models\CarFeatures;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $car = Car::find(1);

        // $car->features->update(['remote_start' => 1 ]);

        // $car->primaryImage->delete();

        // dd($car->features,$car->primaryImage);

        // $car = Car::find(2);

        // $carFeatures = new CarFeatures([
        //     'abs' => 1,
        //     'air_conditioning' => 1,
        //     'power_windows' => 1,
        //     'power_door_locks' => 1,
        //     'cruise_control' => 1,
        //     'bluetooth_connectivity' => 1,
        //     'remote_start' => 1,
        //     'gps_navigation' => 1,
        //     'heater_seats' => 1,
        //     'climat_control' => 1,
        //     'rear_parking_sensors' => 1,
        //     'leather_seats' => 1,
        // ]);

        // $car->features()->save($carFeatures);

        // $car = Car::find(1);

        // $image = new CarImage([
        //     'image_path' => 'path/to/image',
        //     'position' => 1,
        // ]);

        // $car->images()->save($image);

        // $car->images()->create([
        //     'image_path' => 'path/to/image',
        //     'position' => 3,
        // ]);

        // $car->images()->createMany([
        //     [
        //         'image_path' => 'path/to/image',
        //         'position' => 4,
        //     ],
        //     [
        //         'image_path' => 'path/to/image',
        //         'position' => 6,
        //     ],
        // ]);
        // $car->images()->saveMany([
        //     new CarImage([
        //         'image_path' => 'path/to/image',
        //         'position' => 7,
        //     ]),
        //     new CarImage([
        //         'image_path' => 'path/to/image',
        //         'position' => 8,
        //     ]),
        // ]);
        // dd($car->images);


        // $car = Car::find(1);
        // dd($car->carType->name);

        $carType = CarType::where('name', 'Hatchback')->first();

        // $cars = Car::whereBelongsTo($carType)->get();
        $cars = $carType->cars;

        // dd($cars);
        
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
