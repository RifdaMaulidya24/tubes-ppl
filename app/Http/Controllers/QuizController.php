<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($operation)
    {
            // Validasi: hanya operation yang diizinkan
            // Jika file tidak ada, 404
        if (!view()->exists("quiz.$operation")) {
            abort(404);
        }

        return view("quiz.$operation", [
            'operation' => $operation
        ]);
    }
}
