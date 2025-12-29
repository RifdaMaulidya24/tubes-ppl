<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQuizProgress;
use App\Models\UserBadge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function show($operation)
    {
        $allowedOperations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian'];
        if (!in_array($operation, $allowedOperations)) {
            abort(404);
        }

        // Cek apakah view folder ada
        if (!view()->exists("quiz.$operation.$operation")) {
            abort(404);
        }

        $userId = Auth::id();
        
        // Ambil data completed levels dan scores dari database
        $progress = UserQuizProgress::where('user_id', $userId)
            ->where('operation', $operation)
            ->get();
        
        $completedLevels = [];
        $scores = [];
        
        foreach ($progress as $item) {
            $completedLevels[$item->level] = $item->completed;
            $scores[$item->level] = $item->score;
        }

        return view("quiz.$operation.$operation", [
            'operation' => $operation,
            'completedLevels' => $completedLevels,
            'scores' => $scores
        ]);
    }

    public function showLevel($operation, $level)
    {
        $allowedOperations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian'];
        if (!in_array($operation, $allowedOperations)) {
            abort(404);
        }

        // Cek apakah view level ada
        if (!view()->exists("quiz.$operation.level$level")) {
            abort(404);
        }

        return view("quiz.$operation.level$level", [
            'operation' => $operation,
            'level' => $level
        ]);
    }

    public function completeLevel(Request $request, $operation, $level)
    {
        $validated = $request->validate([
            'score' => 'required|integer|min:0|max:100',
            'unlock_next' => 'boolean',
            'next_level' => 'integer|min:1'
        ]);

        $userId = Auth::id();
        $score = $validated['score'];
        
        // Hitung poin berdasarkan score
        $points = $this->calculatePoints($score, $level);

        // Simpan atau update progress
        $progress = UserQuizProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'operation' => $operation,
                'level' => $level
            ],
            [
                'score' => $score,
                'points' => $points,
                'completed' => true,
                'completed_at' => now()
            ]
        );

        // Check dan berikan badge jika memenuhi syarat
        $this->checkAndAwardBadges($userId);

        return response()->json([
            'status' => 'ok',
            'success' => true,
            'points' => $points,
            'total_points' => $this->getTotalPoints($userId),
            'message' => "Level $level selesai! +$points poin"
        ]);
    }

    private function calculatePoints($score, $level)
    {
        // Base points berdasarkan level
        $basePoints = 10 * $level;
        
        // Multiplier berdasarkan score
        if ($score >= 90) {
            $multiplier = 1.5; // Perfect
        } elseif ($score >= 80) {
            $multiplier = 1.2; // Excellent
        } elseif ($score >= 70) {
            $multiplier = 1.0; // Good
        } elseif ($score >= 60) {
            $multiplier = 0.8; // Average
        } else {
            $multiplier = 0.5; // Need improvement
        }

        return (int) ($basePoints * $multiplier);
    }

    private function getTotalPoints($userId)
    {
        return UserQuizProgress::where('user_id', $userId)
            ->sum('points');
    }

    private function checkAndAwardBadges($userId)
    {
        $totalPoints = $this->getTotalPoints($userId);
        $completedLevels = UserQuizProgress::where('user_id', $userId)
            ->where('completed', true)
            ->count();

        // Badge Beginner - 5 level pertama
        if ($completedLevels >= 5) {
            $this->awardBadge($userId, 'beginner');
        }

        // Badge Intermediate - 500 poin
        if ($totalPoints >= 500) {
            $this->awardBadge($userId, 'intermediate');
        }

        // Badge Advanced - 1000 poin
        if ($totalPoints >= 1000) {
            $this->awardBadge($userId, 'advanced');
        }

        // Badge Master - 2000 poin
        if ($totalPoints >= 2000) {
            $this->awardBadge($userId, 'master');
        }

        // Badge Legend - semua level dengan score > 90
        $perfectLevels = UserQuizProgress::where('user_id', $userId)
            ->where('score', '>=', 90)
            ->count();
        
        if ($perfectLevels >= 20) { // 4 operasi x 5 level
            $this->awardBadge($userId, 'legend');
        }
    }

    private function awardBadge($userId, $badgeType)
    {
        $exists = UserBadge::where('user_id', $userId)
            ->where('badge_type', $badgeType)
            ->exists();

        if (!$exists) {
            UserBadge::create([
                'user_id' => $userId,
                'badge_type' => $badgeType,
                'earned_at' => now()
            ]);
        }
    }

    public function result()
    {
        $userId = Auth::id();
        
        $operations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian'];
        $stats = [];

        foreach ($operations as $op) {
            $levels = UserQuizProgress::where('user_id', $userId)
                ->where('operation', $op)
                ->orderBy('level')
                ->get();

            $completedCount = $levels->where('completed', true)->count();
            $avgScore = $levels->where('completed', true)->avg('score') ?? 0;
            $bestScore = $levels->max('score') ?? 0;
            
            // Total levels bisa didapat dari data atau default 5
            $totalLevels = max($levels->max('level') ?? 0, 5);
            $progressPct = $totalLevels > 0 ? ($completedCount / $totalLevels) * 100 : 0;

            $stats[] = [
                'title' => ucfirst($op),
                'slug' => $op,
                'completed_count' => $completedCount,
                'avg_score' => round($avgScore),
                'best_score' => $bestScore,
                'total_levels' => $totalLevels,
                'progress_pct' => round($progressPct),
                'levels' => $levels->map(function($level) {
                    return [
                        'level' => $level->level,
                        'completed' => $level->completed,
                        'score' => $level->score
                    ];
                })->toArray()
            ];
        }

        return view('quiz.result', compact('stats'));
    }

    public function dashboard()
    {
        $userId = Auth::id();
        
        // Total poin
        $totalPoints = $this->getTotalPoints($userId);
        
        // Poin baru (dari 7 hari terakhir)
        $recentPoints = UserQuizProgress::where('user_id', $userId)
            ->where('completed_at', '>=', now()->subDays(7))
            ->sum('points');

        // Badges yang dimiliki
        $badges = UserBadge::where('user_id', $userId)
            ->get()
            ->map(function($badge) {
                return array_merge(
                    ['id' => $badge->id],
                    UserBadge::getBadgeInfo($badge->badge_type)
                );
            });

        // Progress per operasi
        $operations = ['penambahan', 'pengurangan', 'perkalian', 'pembagian'];
        $topicsProgress = [];

        foreach ($operations as $op) {
            $completedLevels = UserQuizProgress::where('user_id', $userId)
                ->where('operation', $op)
                ->where('completed', true)
                ->count();
            
            $totalLevels = 5;
            $progressPct = ($completedLevels / $totalLevels) * 100;

            $topicsProgress[] = [
                'operation' => $op,
                'progress' => round($progressPct),
                'completed' => $completedLevels,
                'total' => $totalLevels
            ];
        }

        return view('dashboard', compact('totalPoints', 'recentPoints', 'badges', 'topicsProgress'));
    }
}