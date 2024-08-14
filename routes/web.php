<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/d/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::prefix('/admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/appointments', [App\Http\Controllers\AdminController::class, 'showAppointments'])->name('admin.appointments');
    Route::get('/doctors', [App\Http\Controllers\AdminController::class, 'showDoctors'])->name('admin.doctors');
    Route::get('/add-doctor', [App\Http\Controllers\AdminController::class, 'addDoctor'])->name('admin.add.doctor');
    Route::get('/patients', [App\Http\Controllers\AdminController::class, 'showPatients'])->name('admin.patients');
});
