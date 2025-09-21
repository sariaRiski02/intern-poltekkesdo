<?php

use App\Models\intern;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::prefix('admin')->group(function () {
    Route::get('/', fn() => redirect()->route('dashboard'));
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/peserta', [AdminController::class, 'intern'])->name('admin.intern');
    Route::get('/departemen', [AdminController::class, 'department'])->name('admin.department');
    Route::get('/tambah-peserta', [AdminController::class, 'add_intern'])->name('admin.add-intern');
    Route::get('/profil', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/peserta/{docs:slug}', [AdminController::class, 'detail_intern'])->name('admin.detail-intern');
    // edit status
    Route::get('/peserta/{docs:slug}/edit/{status}', [AdminController::class, 'edit_status'])->name('admin.edit-intern-status');
    // download document
    Route::get('/document/{filename}', [AdminController::class, 'document'])->name('admin.document');
});
