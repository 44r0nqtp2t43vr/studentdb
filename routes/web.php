<?php

use App\Http\Controllers\StudentController;

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

/**
 * Alunan Routes
 */
Route::get('/students', [StudentController::class, 'getStudents']);
// Route::get('/studentlms/{id}', [StudentController::class, 'getStudentLMSUsage']);

