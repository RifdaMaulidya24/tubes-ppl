<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

#route setiap quiz
Route::get('/quiz/penambahan', [QuizController::class, 'penambahan']);
Route::get('/quiz/pengurangan', [QuizController::class, 'pengurangan']);
Route::get('/quiz/perkalian', [QuizController::class, 'perkalian']);
Route::get('/quiz/pembagian', [QuizController::class, 'pembagian']);


require __DIR__.'/auth.php';
