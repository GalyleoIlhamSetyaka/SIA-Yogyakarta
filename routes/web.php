<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('index');
});
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
