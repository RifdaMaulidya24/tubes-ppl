<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

// =============================
// ROUTE QUIZ
// =============================

// Halaman utama quiz (pilih operasi)
Route::get('/quiz', function () {
    return view('quiz.index'); // misal halaman pilih Penambahan, Pengurangan, dll
})->name('quiz.index');

// Halaman pilih level untuk operasi tertentu
// Halaman pilih level untuk operasi tertentu
Route::get('/quiz/{operation}', function ($operation) {
    $allowedOperations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian']; // opsional, validasi
    if (!in_array($operation, $allowedOperations)) {
        abort(404);
    }
    // Ambil view sesuai nama operasi
    return view("quiz.$operation.$operation");
})->name('quiz.levels');


// Halaman level tertentu
Route::get('/quiz/{operation}/level{level}', function ($operation, $level) {
    // contoh: resources/views/quiz/penambahan/level1.blade.php
    return view("quiz.$operation.level$level");
})->name('quiz.level');


// Opsional: jika kamu ingin pakai QuizController untuk logika dinamis
// Route::get('/quiz/{operation}/level{level}', [QuizController::class, 'showLevel'])
//     ->name('quiz.level.controller');

#route ketika 1 level sudah dikerjakan, maka level lainnya terbuka
Route::post('/quiz/penambahan/complete-level/{level}', function($level){
    session()->push('penambahan_completed_levels', $level);
    return response()->json(['status'=>'ok']);
});

Route::post('/quiz/pengurangan/complete-level/{level}', function($level){
    session()->push('pengurangan_completed_levels', $level);
    return response()->json(['status'=>'ok']);
});

Route::post('/quiz/perkalian/complete-level/{level}', function($level){
    session()->push('perkalian_completed_levels', $level);
    return response()->json(['status'=>'ok']);
});

Route::post('/quiz/pembagian/complete-level/{level}', function($level){
    session()->push('pembagian_completed_levels', $level);
    return response()->json(['status'=>'ok']);
});

require __DIR__.'/auth.php';
