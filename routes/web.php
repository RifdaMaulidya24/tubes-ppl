<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuizController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// =============================
// AUTHENTICATION ROUTES
// =============================

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// =============================
// EMAIL VERIFICATION ROUTES
// =============================

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/dashboard')->with('status', 'email-verified');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'verification-link-sent');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// =============================
// PROFILE ROUTES
// =============================

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
});

// =============================
// ROUTE MATERI
// =============================

Route::middleware(['auth'])->group(function () {
    Route::get('/materi', function () {
        return view('materi.materi');
    })->name('materi.index');

    Route::get('/materi/penambahan', function () {
        return view('materi.penambahan');
    })->name('materi.penambahan');

    Route::get('/materi/pengurangan', function () {
        return view('materi.pengurangan');
    })->name('materi.pengurangan');

    Route::get('/materi/perkalian', function () {
        return view('materi.perkalian');
    })->name('materi.perkalian');

    Route::get('/materi/pembagian', function () {
        return view('materi.pembagian');
    })->name('materi.pembagian');
});

// =============================
// QUIZ ROUTES - MENGGUNAKAN CONTROLLER
// =============================

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard dengan poin & badges
    Route::get('/dashboard', [QuizController::class, 'dashboard'])->name('dashboard');
    
    // ⚠️ PENTING: Result harus SEBELUM wildcard {operation}
    // Result/statistik - menampilkan semua progress quiz
    Route::get('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');
    
    // Halaman pilih level per operasi
    Route::get('/quiz/{operation}', [QuizController::class, 'show'])->name('quiz.levels');
    
    // Halaman quiz per level
    Route::get('/quiz/{operation}/level{level}', [QuizController::class, 'showLevel'])->name('quiz.level');
    
    // API: Complete level (simpan score & unlock)
    Route::post('/quiz/{operation}/complete-level/{level}', [QuizController::class, 'completeLevel'])
        ->name('quiz.complete');
});

require __DIR__.'/auth.php';