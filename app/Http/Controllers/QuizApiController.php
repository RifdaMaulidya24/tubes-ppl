<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizApiController extends Controller
{
    public function getQuestions($operation)
    {
        return QuizQuestion::where('operation', $operation)->get();
    }
}
