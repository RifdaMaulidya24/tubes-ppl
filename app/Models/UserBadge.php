<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBadge extends Model
{
    protected $fillable = [
        'user_id',
        'badge_type',
        'operation',
        'earned_at'
    ];

    protected $casts = [
        'earned_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Badge definitions
    public static function getBadgeInfo($badgeType)
    {
        $badges = [
            'beginner' => [
                'name' => 'Pemula',
                'icon' => '🌱',
                'color' => 'green',
                'points_required' => 100,
                'description' => 'Selesaikan 5 level pertama'
            ],
            'intermediate' => [
                'name' => 'Pelajar',
                'icon' => '📚',
                'color' => 'blue',
                'points_required' => 500,
                'description' => 'Kumpulkan 500 poin'
            ],
            'advanced' => [
                'name' => 'Ahli',
                'icon' => '🎓',
                'color' => 'purple',
                'points_required' => 1000,
                'description' => 'Kumpulkan 1000 poin'
            ],
            'master' => [
                'name' => 'Master',
                'icon' => '👑',
                'color' => 'orange',
                'points_required' => 2000,
                'description' => 'Kumpulkan 2000 poin'
            ],
            'legend' => [
                'name' => 'Legend',
                'icon' => '⭐',
                'color' => 'gold',
                'points_required' => 5000,
                'description' => 'Selesaikan semua level dengan sempurna'
            ]
        ];

        return $badges[$badgeType] ?? null;
    }
}