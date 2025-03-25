<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/register/customer', [CustomerRegisterController::class, 'showRegistrationForm']);
Route::post('/register/customer', [CustomerRegisterController::class, 'register']);

Route::get('/register/admin', [AdminRegisterController::class, 'showRegistrationForm']);
Route::post('/register/admin', [AdminRegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminLoginController::class, 'login']);

// Logout Route
Route::post('/logout', function (Request $request) {
    $user = Auth::user(); // Get the logged-in user before logging out
    Auth::logout();

    if ($user && $user->role == 'admin') {
        return redirect('/admin/login')->with('message', 'Admin logged out successfully.');
    }

    return redirect('/login')->with('message', 'You have been logged out.');
})->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});
