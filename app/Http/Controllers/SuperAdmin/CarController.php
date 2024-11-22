<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car; // Your Car model
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    // Show the form
    public function create()
    {
        return view('auth.super-admin.addcar');
    }

    // Store the car in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            // 'availability' => 'required|in:available,unavailable',
            'plate' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle the file upload
        $imagePath = $request->file('image')->store('car-images', 'public');

        // Create the car
        Car::create([
            'name' => $request->name,
            'model' => $request->model,
            'price' => $request->price,
            // 'availability' => $request->availability,
            'plate' => $request->plate,
            'image' => $imagePath,
        ]);

        return redirect()->route('super-admin.cars.create')->with('success', 'Car added successfully!');
    }
}
