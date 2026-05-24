api.php (routes)
<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// GET - fetch all students
Route::get('/students', [StudentController::class, 'index']);

// GET - fetch one student by ID
Route::get('/students/{id}', [StudentController::class, 'show']);

// POST - create a new student
Route::post('/students', [StudentController::class, 'store']);

// PUT - update an existing student by ID
Route::put('/students/{id}', [StudentController::class, 'update']);

// PATCH - partial update of an existing student by ID
Route::patch('/students/{id}', [StudentController::class, 'patch']);

// DELETE - delete all students
Route::delete('/students', [StudentController::class, 'destroyAll']);
// DELETE - delete one student by ID
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

//I saw this in tiktok so I wanted to try it but since we have custom methods like patch and destroyAll.
// it doesn't work with the resource route. 
// Route::resource('students', StudentController::class);

//so in order to use the resource route we can specify using "only" the methods we want to use and include the custom methods.
// Route::resource('students', StudentController::class)->only([
//     'index', 'show', 'store', 'update', 'destroy','patch','destroyAll',
// ]);

