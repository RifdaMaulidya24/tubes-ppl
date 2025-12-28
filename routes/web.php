<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quiz', function () {
    return view('quiz.quiz'); // <- kalau file kamu: resources/views/quiz/quiz.blade.php
})->name('quiz.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route yang butuh login (protected)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// =============================
// ROUTE QUIZ
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
    if (!in_array($operation, $allowedOperations)) abort(404);

    return view("quiz.$operation.$operation");
})->name('quiz.levels');

// Halaman level tertentu
Route::get('/quiz/{operation}/level{level}', function ($operation, $level) {
    return view("quiz.$operation.level$level");
})->name('quiz.level');


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

#route ketika 1 level sudah dikerjakan, maka level lainnya terbuka
Route::post('/quiz/penambahan/complete-level/{level}', function(\Illuminate\Http\Request $request, $level){
    $level = (int) $level;

    // simpan completed (hindari duplikat)
    $completed = session('penambahan_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['penambahan_completed_levels' => $completed]);

    // simpan score (ambil yg terbesar kalau main ulang)
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
#pengurangan
Route::post('/quiz/pengurangan/complete-level/{level}', function(\Illuminate\Http\Request $request, $level){
    $level = (int) $level;

    // simpan completed (hindari duplikat)
    $completed = session('pengurangan_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['pengurangan_completed_levels' => $completed]);

    // simpan score (ambil yg terbesar kalau main ulang)
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
#perkalian
Route::post('/quiz/perkalian/complete-level/{level}', function(\Illuminate\Http\Request $request, $level){
    $level = (int) $level;

    // simpan completed (hindari duplikat)
    $completed = session('perkalian_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['perkalian_completed_levels' => $completed]);

    // simpan score (ambil yg terbesar kalau main ulang)
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
#pembagian
Route::post('/quiz/pembagian/complete-level/{level}', function(\Illuminate\Http\Request $request, $level){
    $level = (int) $level;

    // simpan completed (hindari duplikat)
    $completed = session('pembagian_completed_levels', []);
    $completed[] = $level;
    $completed = array_values(array_unique(array_map('intval', $completed)));
    session(['pembagian_completed_levels' => $completed]);

    // simpan score (ambil yg terbesar kalau main ulang)
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

