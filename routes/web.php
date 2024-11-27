<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SuperAdmin\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;


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
// Route::middleware('auth')->get('/admin/dashboard', function () {
//     return view('auth.admin.dashboard');
// })->name('admin.dashboard');
Route::middleware('auth')->get('/admin/dashboard', [BookingController::class, 'create'])->name('admin.dashboard');
// Add this route
Route::middleware('auth')->post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::middleware('auth')->patch('/bookings/{booking}/return', [BookingController::class, 'markReturned'])->name('bookings.markReturned');

Route::middleware('auth')->get('/bookings/pending-returns', [BookingController::class, 'pendingReturns'])->name('bookings.pendingReturns');
Route::middleware('auth')->patch('/bookings/{booking}/mark-returned', [BookingController::class, 'markReturnedWithCheckbox'])->name('bookings.markReturnedWithCheckbox');
Route::middleware('auth')->get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::middleware('auth')->post('/clients', [ClientController::class, 'store'])->name('clients.store');


Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::middleware('auth')->get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::middleware('auth')->post('/clients', [ClientController::class, 'store'])->name('clients.store');


// Route::get('/super-admin/login', [SuperAdminController::class, 'showLoginForm'])->name('super-admin.login-form');
// Route::post('/super-admin/login', [SuperAdminController::class, 'login'])->name('super-admin.login');
// Route::middleware(SuperAdminMiddleware::class)->group(function () {
//     Route::get('/super-admin/dashboard', [SuperAdminController::class, 'dashboard'])->name('super-admin.dashboard');
// });


Route::get('/super-admin/login', [AuthenticatedSessionController::class, 'create'])->name('super-admin.login');
Route::post('/super-admin/login', [AuthenticatedSessionController::class, 'store'])->name('super-admin.login.submit');
Route::post('/super-admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('super-admin.logout');
Route::middleware('auth')->get('/super-admin/dashboard', function () {
    return view('auth.super-admin.dashboard');  // Replace with your actual dashboard view
})->name('super-admin.dashboard');

// Car management for super admin
Route::middleware(['auth', 'role:super-admin'])->prefix('super-admin')->name('super-admin.')->group(function () {
    // Route to show the form for creating a car
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

    // Route to handle form submission
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
});

Route::middleware(['auth', 'role:super-admin'])->prefix('super-admin')->name('super-admin.')->group(function () {
    Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create'); // Show the form
    Route::post('/admins', [AdminController::class, 'store'])->name('admins.store'); // Handle form submission
});

Route::get('/sales-data', [SalesController::class, 'getSalesData']);
Route::get('/client-data', [ClientController::class, 'getFilteredClients'])->name('client.data');
Route::get('/bookings-data', [BookingController::class, 'getBookings']);

Route::get('/available-cars', [CarController::class, 'available'])->name('cars.available');



require __DIR__ . '/auth.php';
