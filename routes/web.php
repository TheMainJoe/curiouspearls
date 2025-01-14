<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
//     Route::resource('clients', ClientController::class);
//     Route::resource('tenants', TenantController::class);
//     Route::resource('subscriptions', SubscriptionController::class);
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });

