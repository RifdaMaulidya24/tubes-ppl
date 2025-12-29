<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relasi ke quiz progress
    // Tambahkan di dalam class User

    // Relasi ke quiz progress
    public function quizProgress()
    {
        return $this->hasMany(UserQuizProgress::class);
    }

    // Relasi ke badges
    public function badges()
    {
        return $this->hasMany(UserBadge::class);
    }

    // Helper method: total poin
    public function getTotalPointsAttribute()
    {
        return $this->quizProgress()->sum('points');
    }

    // Helper method: check badge
    public function hasBadge($badgeType)
    {
        return $this->badges()->where('badge_type', $badgeType)->exists();
    }
}