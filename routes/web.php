<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('testhome');
})->name('home');
Route::get('contact', function () {
    return view('contactUS');
})->name('contact');
Route::get('about', function () {
    return view('aboutUS');
})->name('about');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
});
