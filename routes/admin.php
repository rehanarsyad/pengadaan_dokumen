<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\MatrixController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::get('notification/{id}', [NotificationController::class, 'show'])->name('notification.show');

    Route::get('document', [DokumenController::class, 'index'])->name('document');
    Route::get('document/create', [DokumenController::class, 'create'])->name('document.create');
    Route::get('document/edit/{id}', [DokumenController::class, 'edit'])->name('document.edit');
    Route::get('document/download/{file_name}', [DokumenController::class, 'download'])->name('document.download');

    Route::get('matrix', [MatrixController::class, 'index'])->name('matrix');
});