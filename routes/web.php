<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/welcome', function () {
        return inertia('Welcome');
    })->name('welcome');

    Route::get('/settings', function () {
        return inertia('Settings');
    });

    Route::get('/users', [UsersController::class,'index'])->name('users');
    Route::get('/users/create', [UsersController::class,'create'])->name('users.create');
    Route::post('/users/create', [UsersController::class,'store'])->name('users.store');
});
