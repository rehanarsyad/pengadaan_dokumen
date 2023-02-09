<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DokumenController;

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

    Route::get('surat', [SuratController::class, 'index'])->name('surat');
    Route::get('surat/create', [SuratController::class, 'create'])->name('surat.create');
    Route::get('surat/edit/{id}', [SuratController::class, 'edit'])->name('surat.edit');
    Route::get('surat/verify/{id}', [SuratController::class, 'verify'])->name('surat.verify');

    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::get('notification/{id}', [NotificationController::class, 'show'])->name('notification.show');

    Route::get('document', [DokumenController::class, 'index'])->name('document');
    Route::get('document/create', [DokumenController::class, 'create'])->name('document.create');
});