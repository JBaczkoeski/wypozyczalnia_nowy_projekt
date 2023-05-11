<?php

namespace App\Http\Controllers;

use App\Models\Car;

class UserCarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('User.cars', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('User.car', compact('car'));
    }
}
