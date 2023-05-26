<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LMSUsage;

class LMSUsageController extends Controller
{
    //
    public function getLMSUsage(Request $request)
    {
        // Retrieve all movies from the database
        $lmsusage = LMSUsage::all();

        // Return a JSON response containing the movies
        return response()->json([
            'data' => $lmsusage,
        ]);
    }
}
