<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('Admin.cars', compact('cars'));
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
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->storeAs('storage\cars', "car." . $file->getClientOriginalExtension());
            $file->move(public_path('storage\cars'), $filename);
            $request['image'] = $filename;
        }
        $car = Car::create([
            'mark' => $request['mark'],
            'model' => $request['model'],
            'price' => $request['price'],
            'year_of_production' => $request['year_of_production'],
            'fuel_type' => $request['fuel_type'],
            'power' => $request['power'],
            'transmission_type' => $request['transmission_type'],
            'number_of_seat' => $request['number_of_seat'],
            'number_of_door' => $request['number_of_door'],
            'image' => $filename,
        ]);


        return redirect(url('/api/cars'))->with(['succesful car add', $car], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('Admin.car', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect(url('/api/cars'))->with(['succesful car delete'], 201);
    }
}
