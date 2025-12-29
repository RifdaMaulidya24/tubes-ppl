<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuizProgress extends Model
{
    protected $table = 'user_quiz_progress';
    
    protected $fillable = [
        'user_id',
        'operation',
        'level',
        'score',
        'points',
        'completed',
        'completed_at'
    ];

    protected $casts = [
        'completed' => 'boolean',
        'completed_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}