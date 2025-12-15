<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;





Route::middleware(['throttle:forms'])->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('form.index');
    Route::post('/form', [FormController::class, 'store'])->name('form.store');
});
