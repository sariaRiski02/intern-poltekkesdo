<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminInternController;

Route::prefix('admin')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.dashboard'));
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/aktivitas', [AdminController::class, 'activity_index'])->name('admin.activity-index');
    Route::prefix('/peserta')->group(function () {
        Route::get('/', [AdminInternController::class, 'intern'])->name('admin.intern');
        Route::get('/{docs:slug}', [AdminInternController::class, 'detail_intern'])->name('admin.detail-intern');
        // edit status
        Route::get('/{docs:slug}/edit/{status}', [AdminInternController::class, 'edit_status'])->name('admin.edit-intern-status');
        // download document
        Route::get('/document/{filename}', [AdminInternController::class, 'document'])->name('admin.document');
    });

    Route::prefix('department')->group(function () {
        Route::get('/', [AdminController::class, 'department'])->name('admin.department');
    });
    Route::get('/tambah-peserta', [AdminController::class, 'add_intern'])->name('admin.add-intern');
    Route::get('/profil', [AdminController::class, 'profile'])->name('admin.profile');
});
