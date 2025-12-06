<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizApiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
#api untuk quiz
Route::get('/quiz/{operation}', [QuizApiController::class, 'getQuestions']);