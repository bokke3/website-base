<?php
use App\Http\Controllers\Landing;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route for the landing page, accessible without authentication and authorization
Route::get('/', Landing::class)->name('landing');


// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});


// Redirect guests trying to access the admin panel
Route::get('/admin', function () {
    return redirect()->route('login');
})->middleware('guest');