<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/peserta', [AdminController::class, 'intern'])->name('intern');
    Route::get('/departemen', [AdminController::class, 'department'])->name('department');
    Route::get('/tambah-peserta', [AdminController::class, 'add_intern'])->name('add-intern');
    Route::get('/profil', [AdminController::class, 'profile'])->name('profile');

    Route::get('/peserta/1', function () {
        return view('admin.detail-intern');
    })->name('detail-intern');
});
