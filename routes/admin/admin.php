<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminInternController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\AdminAddInternController;
use App\Http\Controllers\AdminDepartmentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\loggedInMiddleware;

Route::middleware(loggedInMiddleware::class)->prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login_admin_process'])->name('admin.login-process');
    Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
    Route::post('/register', [AuthController::class, 'register_admin_process'])->name('admin.register-process');
});




Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.dashboard'));
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/aktivitas', [AdminController::class, 'activity_index'])->name('admin.activity-index');
    Route::prefix('/peserta')->group(function () {
        Route::get('/', [AdminInternController::class, 'intern'])->name('admin.intern');
        Route::get('/{docs:slug}', [AdminInternController::class, 'detail_intern'])->name('admin.detail-intern');
        // edit status
        Route::get('/{docs:slug}/edit/{status}', [AdminInternController::class, 'edit_status'])->name('admin.edit-intern-status');
        // download document
        Route::get('/document/{filename}', [AdminInternController::class, 'document'])->where('filename', '.*')->name('admin.document');
    });
    Route::prefix('department')->group(function () {
        Route::get('/', [AdminController::class, 'department'])->name('admin.department');
        Route::get('/add', [AdminDepartmentController::class, 'add_department'])->name('admin.add-department');
        Route::post('/add', [AdminDepartmentController::class, 'add_department_process'])->name('admin.add-department-process');
        Route::get('/detail/{department:slug}', [AdminDepartmentController::class, 'detail_department'])->name('admin.detail-department');
        Route::get('/{department:slug}/update', [AdminDepartmentController::class, 'update_department'])->name('admin.update-department');
        Route::put('/{department:slug}/update', [AdminDepartmentController::class, 'update_department_process'])->name('admin.update-department-process');
        Route::get('/{department:slug}/delete', [AdminDepartmentController::class, 'delete_department'])->name('admin.delete-department');
    });

    Route::prefix('form')->group(function () {
        Route::get('/add-intern', [AdminController::class, 'add_intern'])->name('admin.add-intern');
        Route::post('/add-intern', [AdminAddInternController::class, 'add_intern_process'])->name('admin.add-intern-process');
    });

    Route::get('/profil', [AdminController::class, 'profile'])->name('admin.profile');
    Route::put('/profil', [AdminProfilController::class, 'profile_store'])->name('admin.profile-store');
});
