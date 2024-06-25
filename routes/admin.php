<?php

use App\Http\Controllers\Admin\CalcusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Middleware\RoleUser;
use Illuminate\Support\Facades\Route;

Route::middleware(RoleUser::class)->prefix('dashboard')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');

    Route::resource('calcus', CalcusController::class);
});
