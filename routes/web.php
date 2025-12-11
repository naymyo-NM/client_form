<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');
