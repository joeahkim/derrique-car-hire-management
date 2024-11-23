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

    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            'number_plate' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cars', 'public');
        }

        // Save data to the database
        Car::create([
            'make' => $validated['make'],
            'model' => $validated['model'],
            'price' => $validated['price'],
            'number_plate' => $validated['number_plate'],
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->route('super-admin.cars.create')->with('success', 'Car added successfully!');
    }
}
