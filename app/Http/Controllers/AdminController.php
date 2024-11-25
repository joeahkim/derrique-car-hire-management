<?php

namespace App\Http\Controllers;

use App\Models\User; // Assuming admins are stored in the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Display the admin creation form
    public function create()
    {
        return view('auth.super-admin.create-admin');
    }

    // Handle admin creation
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create the admin user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'admin', // Assign the 'admin' role
        ]);

        return redirect()->route('super-admin.admins.create')->with('success', 'Admin created successfully!');
    }
}
