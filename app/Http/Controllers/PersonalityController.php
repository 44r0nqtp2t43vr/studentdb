<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personality;

class PersonalityController extends Controller
{
    //
    public function getPersonality(Request $request)
    {
        // Retrieve all movies from the database
        $personality = Personality::all();

        // Return a JSON response containing the movies
        return response()->json([
            'data' => $personality,
        ]);
    }
}
