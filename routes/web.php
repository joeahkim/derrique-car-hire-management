<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Super admin routes
Route::middleware([RoleMiddleware::class . ':super-admin'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Super Admin Dashboard';
    });
});

// Normal admin routes
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
Route::middleware('auth')->get('/admin/dashboard', function () {
    return view('auth.admin.dashboard');  // Replace with your actual dashboard view
})->name('admin.dashboard');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');


require __DIR__ . '/auth.php';
