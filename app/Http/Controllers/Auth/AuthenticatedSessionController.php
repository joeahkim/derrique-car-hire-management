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
        return view('auth.admin.login'); // Adjust the view path if necessary
    }

    // Handle login request
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check the authenticated user's role
            if ($user->role === 'super-admin') {
                return redirect()->route('super-admin.dashboard'); // Redirect super-admin
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect admin
            }

            // If user role is neither admin nor super-admin, log them out
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
