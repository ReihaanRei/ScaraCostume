<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/clothes', function () {
    return view('clothes', ['title' => 'Pakaian Page']);
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/admin', [AdminController::class, 'Dashboard'])->name('dashboardadmin');

Route::get('/clothesAdmin', [AdminController::class,'tampilClothes'])->name('clothesAdmin.tampilclotheses');

