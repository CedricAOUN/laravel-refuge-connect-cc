<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/animal', [AnimalController::class, 'show'])->name('animal.show');

Route::prefix('animals')->group(function () {
    Route::get('/mockdata', [AnimalController::class, 'addMockData'])->name('animals.mockdata');
});
