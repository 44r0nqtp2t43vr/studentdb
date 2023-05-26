<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\LMSUsageController;
use App\Http\Controllers\PersonalityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personalities/{id}', [StudentController::class, 'getPersonality']);
// Route::get('/studentlms/{id}', [StudentController::class, 'getStudentLMSUsage']);

/**
 * Alunan Routes
 */
Route::get('/students', [StudentController::class, 'getStudents']);
Route::get('/lmsusage', [LMSUsageController::class, 'getLMSUsage']);
Route::get('/personality', [PersonalityController::class, 'getPersonality']);
