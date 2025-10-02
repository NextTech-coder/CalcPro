<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('health', fn (): View => view('calculators.health'))->name('calculators.health');
