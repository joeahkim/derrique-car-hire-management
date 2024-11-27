<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Booking;




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

    public function available()
    {
        // Fetch cars that are either not booked or have been returned
        $availableCars = Car::leftJoin('bookings', 'cars.id', '=', 'bookings.car_id')
            ->where(function ($query) {
                $query->whereNull('bookings.id') // Cars never booked
                    ->orWhereNotNull('bookings.actual_return_date'); // Cars that have been returned
            })
            ->select('cars.*')
            ->distinct()
            ->get();

        return view('cars.available', compact('availableCars'));
    }

    public function index()
    {
        // Fetch cars that are either not booked or have been returned
        $cars = Car::leftJoin('bookings', 'cars.id', '=', 'bookings.car_id')
            ->where(function ($query) {
                $query->whereNull('bookings.id') // Cars never booked
                    ->orWhereNotNull('bookings.actual_return_date'); // Cars that have been returned
            })
            ->select('cars.*')
            ->distinct()
            ->get();

        return view('auth.super-admin.cars.index', compact('cars'));
    }
    public function forAllCars()
    {
        $cars = Car::all();

        return view('auth.super-admin.cars.all-cars', compact('cars'));
    }
    public function pendingReturns()
    {
        $bookings = Booking::with(['client', 'car', 'admin']) // Eager load related models to prevent N+1 query issue
            ->whereNull('actual_return_date') // Only bookings that have not been returned
            ->get();

        return view('auth.super-admin.cars.pending-returns', compact('bookings'));
    }
}
