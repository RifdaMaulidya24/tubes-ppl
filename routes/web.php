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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quiz', function () {
    return view('quiz.quiz');
})->name('quiz.index');

// =============================
// AUTHENTICATION ROUTES
// =============================

// Route Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// =============================
// EMAIL VERIFICATION ROUTES
// =============================

Route::middleware('auth')->group(function () {
    // Email verification notice
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    // Email verification handler
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/dashboard')->with('status', 'email-verified');
    })->middleware(['signed'])->name('verification.verify');

    // Resend verification email
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
// QUIZ ROUTES
// =============================

// ✅ Result HARUS sebelum wildcard operation
Route::get('/quiz/result', function () {
    $ops = [
        'penambahan' => 'Penambahan',
        'pengurangan' => 'Pengurangan',
        'perkalian'   => 'Perkalian',
        'pembagian'   => 'Pembagian',
    ];

    $stats = [];

    foreach ($ops as $slug => $title) {
        $completed = session($slug . '_completed_levels', []);
        $completed = array_values(array_unique(array_map('intval', $completed)));

        $scores = session($slug . '_scores', []);
        if (!is_array($scores)) $scores = [];

        $levelKeys = array_map('intval', array_keys($scores));
        $allLevels = array_values(array_unique(array_merge($completed, $levelKeys)));
        sort($allLevels);

        $levels = [];
        foreach ($allLevels as $lv) {
            $levels[] = [
                'level' => $lv,
                'completed' => in_array($lv, $completed),
                'score' => isset($scores[$lv]) ? (int)$scores[$lv] : null,
            ];
        }

        $scoreValues = [];
        foreach ($scores as $v) {
            if (is_numeric($v)) $scoreValues[] = (int)$v;
        }

        $avg = count($scoreValues) ? (int) round(array_sum($scoreValues) / count($scoreValues)) : 0;
        $best = count($scoreValues) ? max($scoreValues) : 0;

        $totalLevels = count($allLevels);
        $progressPct = $totalLevels > 0 ? (int) round((count($completed) / $totalLevels) * 100) : 0;

        $stats[] = [
            'slug' => $slug,
            'title' => $title,
            'completed_count' => count($completed),
            'avg_score' => $avg,
            'best_score' => $best,
            'total_levels' => $totalLevels,
            'progress_pct' => $progressPct,
            'levels' => $levels,
        ];
    }

    return view('quiz.result', compact('stats'));
})->name('quiz.result');

// Halaman pilih level untuk operasi tertentu
Route::get('/quiz/{operation}', function ($operation) {
    $allowedOperations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian'];
    if (!in_array($operation, $allowedOperations)) {
        abort(404);
    }
    return view("quiz.$operation.$operation");
})->name('quiz.levels');

// Halaman level tertentu
Route::get('/quiz/{operation}/level{level}', function ($operation, $level) {
    return view("quiz.$operation.level$level");
})->name('quiz.level');

// =============================
// QUIZ COMPLETION ROUTES
// =============================

// Route untuk Penambahan
Route::post('/quiz/penambahan/complete-level/{level}', function(Request $request, $level){
    $level = (int) $level;

    $completed = session('penambahan_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['penambahan_completed_levels' => $completed]);

    $score = $request->input('score');
    if ($score !== null && is_numeric($score)) {
        $score = (int) $score;
        $scores = session('penambahan_scores', []);
        if (!is_array($scores)) $scores = [];

        $prev = $scores[$level] ?? null;
        $scores[$level] = ($prev === null) ? $score : max((int)$prev, $score);

        session(['penambahan_scores' => $scores]);
    }

    return response()->json(['status' => 'ok', 'success' => true]);
});

// Route untuk Pengurangan
Route::post('/quiz/pengurangan/complete-level/{level}', function(Request $request, $level){
    $level = (int) $level;

    $completed = session('pengurangan_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['pengurangan_completed_levels' => $completed]);

    $score = $request->input('score');
    if ($score !== null && is_numeric($score)) {
        $score = (int) $score;
        $scores = session('pengurangan_scores', []);
        if (!is_array($scores)) $scores = [];

        $prev = $scores[$level] ?? null;
        $scores[$level] = ($prev === null) ? $score : max((int)$prev, $score);

        session(['pengurangan_scores' => $scores]);
    }

    return response()->json(['status' => 'ok', 'success' => true]);
});

// Route untuk Perkalian
Route::post('/quiz/perkalian/complete-level/{level}', function(Request $request, $level){
    $level = (int) $level;

    $completed = session('perkalian_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['perkalian_completed_levels' => $completed]);

    $score = $request->input('score');
    if ($score !== null && is_numeric($score)) {
        $score = (int) $score;
        $scores = session('perkalian_scores', []);
        if (!is_array($scores)) $scores = [];

        $prev = $scores[$level] ?? null;
        $scores[$level] = ($prev === null) ? $score : max((int)$prev, $score);

        session(['perkalian_scores' => $scores]);
    }

    return response()->json(['status' => 'ok', 'success' => true]);
});

// Route untuk Pembagian
Route::post('/quiz/pembagian/complete-level/{level}', function(Request $request, $level){
    $level = (int) $level;

    $completed = session('pembagian_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['pembagian_completed_levels' => $completed]);

    $score = $request->input('score');
    if ($score !== null && is_numeric($score)) {
        $score = (int) $score;
        $scores = session('pembagian_scores', []);
        if (!is_array($scores)) $scores = [];

        $prev = $scores[$level] ?? null;
        $scores[$level] = ($prev === null) ? $score : max((int)$prev, $score);

        session(['pembagian_scores' => $scores]);
    }

    return response()->json(['status' => 'ok', 'success' => true]);
});