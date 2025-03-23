<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Services\FirebaseController;  


Route::get('/', function () {
    return view('index');
});
// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Rute untuk registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Rute untuk logout
Route::get('/logout', [FirebaseController::class, 'firebase_logout']);
Route::get('/home', function () {
    return view('home');
}); 