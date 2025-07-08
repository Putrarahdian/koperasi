<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SimpananAnggotaController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'showLogin']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

route::middleware(['role:admin,bendahara'])->group(function(){ 

    Route::get('/anggotas', [AnggotaController::class, 'index'])->name('anggotas.index');
    Route::get('/anggotas/create', [AnggotaController::class, 'create'])->name('anggotas.create');
    Route::post('/anggotas', [AnggotaController::class, 'store'])->name('anggotas.store');
    Route::get('/anggotas/{anggota}', [AnggotaController::class, 'show'])->name('anggotas.show');
    Route::get('/anggotas/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggotas.edit');
    Route::delete('/anggotas/{anggota}', [AnggotaController::class, 'destroy'])->name('anggotas.destroy');
    Route::put('/anggotas/{anggota}', [AnggotaController::class, 'update'])->name('anggotas.update');

    // link simpanan anggotas
    Route::get('/simpanans', [SimpananAnggotaController::class, 'index'])->name('simpanans.index');
    Route::get('/simpanans/create', [SimpananAnggotaController::class, 'create'])->name('simpanans.create');
    Route::post('/simpanans', [SimpananAnggotaController::class, 'store'])->name('simpanans.store');
    Route::get('/simpanans/{anggota}', [SimpananAnggotaController::class, 'show'])->name('simpanans.show');
    Route::get('/simpanans/{anggota}/edit', [SimpananAnggotaController::class, 'edit'])->name('simpanans.edit');
    Route::delete('/simpanans/{anggota}', [SimpananAnggotaController::class, 'destroy'])->name('simpanans.destroy');
    Route::put('/simpanans/{anggota}', [SimpananAnggotaController::class, 'update'])->name('simpanans.update');
});

route::middleware(['role:admin'])->group(function(){ 
    
    Route::get('/penggunas', [PenggunaController::class, 'index'])->name('penggunas.index');
    Route::get('/penggunas/create', [PenggunaController::class, 'create'])->name('penggunas.create');
    Route::post('/penggunas', [PenggunaController::class, 'store'])->name('penggunas.store');

    
});