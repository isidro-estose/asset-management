<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CategoryController;

// Redirect root to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Login/Logout routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Dummy routes for Users and Reports (replace with real controllers later)
    Route::get('/users', function() { return 'Users list'; })->name('users.index');
    // Route::get('/users/create', function() { return 'Add user form'; })->name('users.create');
    // Route::get('/reports', function() { return 'Reports page'; })->name('reports.index');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::put('/partials/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');

    Route::get('/item', [App\Http\Controllers\ItemController::class, 'main'])->name('item.main');
    Route::get('/item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');


    // Routes for Vendor management
    Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'main'])->name('vendor.main');
    Route::get('/vendor/create', [App\Http\Controllers\VendorController::class, 'create'])->name('vendor.create');
    Route::post('/vendor/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');
    Route::put('/vendor/{vendor}/update', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update');

    // Routes for Category management
    Route::resource('category', CategoryController::class);
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'main'])->name('category.main');
    Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
});