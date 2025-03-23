<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Services\FirebaseController;  


Route::get('/', function () {
    return view('index');
});
Route::get('/loginpage', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('/signup', [FirebaseController::class, 'signup']); 

Route::post('/login', [FirebaseController::class, 'login']); 

Route::get('/logout', [FirebaseController::class, 'logout']); 