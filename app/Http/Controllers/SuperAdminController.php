<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('super-admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authenticate as super admin
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'super-admin'])) {
            return redirect()->route('super-admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials or not a super admin.']);
    }

    public function dashboard()
    {
        return view('super-admin.dashboard');
    }
}
