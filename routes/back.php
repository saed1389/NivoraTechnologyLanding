<?php

use App\Http\Controllers\Backend\CityScanController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LeadController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/scan/create', [CityScanController::class, 'create'])->name('scan.create');
    Route::post('/scan', [CityScanController::class, 'store'])->name('scan.store');

    Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/leads/export', [LeadController::class, 'export'])->name('leads.export');
    Route::get('/leads/detail', [LeadController::class, 'detail'])->name('leads.detail');
});
