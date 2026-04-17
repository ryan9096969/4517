<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () { return view('index'); })->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login-failed', function () {
    return view('failed');
})->name('login.failed');

Route::get('/reservation', function () { return view('reservation'); })->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/thankyou', function () { 
    return view('thankyou', [
        'date'  => session('date'),
        'time'  => session('time'),
        'table' => session('table'),
        'email' => session('email')
    ]);
})->name('thankyou');
