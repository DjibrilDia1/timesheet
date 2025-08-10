<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
})->name('register');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('timesheet', function () {
    return view('timesheet');
})->middleware(['auth'])->name('timesheet');

Route::get('fiche-de-temps', function () {
    return view('fiche-de-temps');
})->middleware(['auth'])->name('fiche_de_temps');

Route::get('a-valider', function () {
    return view('a-valider');
})->middleware(['auth'])->name('a_valider');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
