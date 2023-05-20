<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personality;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Return list of students
     */
    public function getStudents(Request $request)
    {
        // Retrieve all movies from the database
        $students = Student::all();

        // Return a JSON response containing the movies
        return response()->json([
            'data' => $students,
        ]);
    }
    /**
     * Get LMS usage based on student number
     */
    public function getStudentLMSUsage(Request $request, $stud_no)
    {
        $data = Student::with(['usage'])->find($stud_no);

        if (!$data) {
            return response()->json(['error' => 'Student not found'], 404);

        }

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Get Personalities based on student number
     */
    public function getPersonality(Request $request, $stud_no)
    {
        $data = Student::with(['personality'])->find($stud_no);

        if (!$data) {
            return response()->json(['error' => 'Personality not found'], 404);
        }
    }
}


