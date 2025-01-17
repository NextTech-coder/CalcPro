<?php

use App\Http\Controllers\CalculatorController;
use App\Models\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $calculators = Calculator::all();

    return view('home', compact('calculators'));
})->name('home');

Route::name('calculator.')->group(function () {
    Route::get('calculator/{slug}', [CalculatorController::class, 'show'])->name('show');
});

Route::post('/calculator-url', [CalculatorController::class, 'getUrl']);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
