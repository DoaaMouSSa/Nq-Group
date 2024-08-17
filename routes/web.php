<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
// API routes for Employee
    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'get']);
        Route::get('{id}', [EmployeeController::class, 'getById']);
        Route::put('{id}', [EmployeeController::class, 'update']);
        Route::delete('{id}', [EmployeeController::class, 'delete']);
});
