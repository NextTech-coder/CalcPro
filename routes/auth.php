<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('guest')->group(function () {
    Route::get('register/create', [RegisterController::class, 'create'])->name('register.create');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login/create', [AuthController::class, 'create'])->name('login.create');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');

});

Route::middleware('auth')->group(function () {
    Route::post('logout', function (Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.create');
    })->name('logout');

});
