<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personality;

class StudentController extends Controller
{
    public function getPersonality(Request $request, $stud_no)
    {
        $data = Student::with(['personality'])->find($stud_no);

        if (!$data) {
            return response()->json(['error' => 'Personality not found'], 404);
        }

        return response()->json([
            'data' => $data
        ]);
    }
}
