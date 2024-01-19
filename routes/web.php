<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Student\NewStudentController;
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
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::middleware('auth')->group(function () {
    //Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/new-student', [NewStudentController::class, 'index'])->name('new-student');
    Route::post('/confirm-student', [NewStudentController::class, 'confirm_student'])->name('confirm-student');
    Route::post('/upload-student-image', [NewStudentController::class, 'upload_student_image'])->name('upload-student-image');

    Route::get('/settings', function () {
        return inertia('Settings');
    });

    Route::get('/users', [UsersController::class,'index'])->name('users');
    Route::get('/users/create', [UsersController::class,'create'])->name('users.create');
    Route::post('/users/create', [UsersController::class,'store'])->name('users.store');
});
