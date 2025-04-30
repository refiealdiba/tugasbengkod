<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [AuthController::class, 'form'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
    Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/obat/{id}', [ObatController::class, 'edit'])->name('obat.edit');
    Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');
    Route::get('/dokter/periksa', [PeriksaController::class, 'index'])->name('periksa');
    Route::get('/dokter/periksa/{id}', [PeriksaController::class, 'editPeriksa'])->name('periksa.edit');
    Route::put('/dokter/periksa/{id}', [PeriksaController::class, 'updatePeriksa'])->name('periksa.update');
    Route::get('/periksa/{id}', [PeriksaController::class, 'detail'])->name('periksa.detail');
    Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa.index');
    
});

Route::middleware(['auth', 'role:pasien'])->group(function () {
    Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa.index');
    Route::post('/periksa', [PeriksaController::class, 'daftarPeriksa'])->name('periksa.daftarPeriksa');
    Route::get('/periksa/{id}', [PeriksaController::class, 'detail'])->name('periksa.detail');
});