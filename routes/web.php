<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.show');

Route::prefix('animals')->group(function () {
    Route::get('/mockdata', [AnimalController::class, 'addMockData'])->name('animals.mockdata'); // debug pour remplir la BDD
    Route::get('/add', [AnimalController::class, 'addAnimal'])->name('animals.add');
    Route::get('/modify/{id}', [AnimalController::class, 'modifyAnimal'])->name('animals.modify');
    Route::get('/delete/{id}', [AnimalController::class, 'deleteAnimal'])->name('animals.delete');
});

Route::fallback(function () {
    return view('errors.not-found');
})->name('not-found');
