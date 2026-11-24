<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    // Semua user yang sudah login
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('dokter', DoctorController::class);
    Route::resource('poli', PoliController::class);

    Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('pendaftaran.index');

    Route::get('/jadwal', [ScheduleController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal/{hari}', [ScheduleController::class, 'show']);

    // Khusus Admin dan Petugas Pendaftaran
    Route::middleware('role:admin,registration')->group(function () {
        Route::resource('pasien', PatientController::class);
    });

    // Khusus Dokter
    Route::middleware('role:doctor')->group(function () {
        Route::get('/pemeriksaan', [ExaminationController::class, 'index'])->name('pemeriksaan.index');
    });

    // Khusus Admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
    });
});