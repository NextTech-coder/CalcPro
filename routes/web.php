<?php

use App\Models\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $calculators = Calculator::all();

    return view('home', compact('calculators'));
})->name('home');

require __DIR__ . '/auth.php';
