<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all clients and vehicles for the booking form
        $clients = Client::all();
        $cars = Car::all();

        // Return the view with the data
        return view('auth.admin.dashboard', compact('clients', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'car_id' => 'required|exists:cars,id',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'amount_paid' => 'required|numeric|min:0',
        ]);

        Booking::create([
            'client_id' => $validated['client_id'],
            'car_id' => $validated['car_id'],
            'pickup_date' => $validated['pickup_date'],
            'return_date' => $validated['return_date'],
            'amount_paid' => $validated['amount_paid'],
            'admin_id' => Auth::id(), // Record the admin who made the booking
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Booking created successfully.');
    }

    public function markReturned(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'actual_return_date' => 'required|date|after_or_equal:' . $booking->pickup_date,
        ]);

        $booking->update([
            'actual_return_date' => $validated['actual_return_date'],
        ]);

        return redirect()->back()->with('success', 'Car marked as returned successfully.');
    }
    public function pendingReturns()
    {
        $bookings = Booking::whereNull('actual_return_date')->get();

        return view('bookings.pending-returns', compact('bookings'));
    }
    public function markReturnedWithCheckbox(Request $request, Booking $booking)
    {
        $booking->update([
            'actual_return_date' => now(),
        ]);

        return redirect()->route('bookings.pendingReturns')->with('success', 'Booking marked as returned successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }
    public function getBookings(Request $request)
    {
        $filter = $request->query('filter', 'today');
        $query = Booking::query();

        // Filter bookings
        if ($filter === 'today') {
            $query->whereDate('pickup_date', now()->toDateString());
        } elseif ($filter === 'this_month') {
            $query->whereMonth('pickup_date', now()->month)
                ->whereYear('pickup_date', now()->year);
        } elseif ($filter === 'this_year') {
            $query->whereYear('pickup_date', now()->year);
        }

        $bookings = $query->get(['client_name', 'phone_number', 'car_name', 'number_plates', 'amount_paid', 'pickup_date', 'authorized_by']);

        return response()->json(['bookings' => $bookings]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
