<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    // Show the login form
    public function create()
    {
        return view('auth.admin.login');  // This is your login page
    }

    // Handle login request
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the authenticated user is an admin
            if ($user->role === 'admin' || $user->role === 'super-admin') {
                return redirect()->route('admin.dashboard');  // Replace with your admin dashboard route
            }

            // If user is not an admin, log them out
            Auth::logout();
            return back()->withErrors(['error' => 'Unauthorized access.']);
        }

        return back()->withErrors(['error' => 'Invalid credentials.']);
    }

    // Handle logout
    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
