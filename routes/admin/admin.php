<?php

use App\Models\intern;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/admin', fn() => redirect()->route('dashboard'));
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/peserta', [AdminController::class, 'intern'])->name('intern');
    Route::get('/departemen', [AdminController::class, 'department'])->name('department');
    Route::get('/tambah-peserta', [AdminController::class, 'add_intern'])->name('add-intern');
    Route::get('/profil', [AdminController::class, 'profile'])->name('profile');
    Route::get('/peserta/{docs:slug}', [AdminController::class, 'detail_intern'])->name('detail-intern');
});
