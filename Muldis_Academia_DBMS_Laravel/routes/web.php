<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Student routes
Route::get('/api/students/fetch_all/', [\App\Http\Controllers\Student_Controller::class, 'fetch_all'])->name('students.fetch_all');
Route::get('/api/students/fetch_one/{student_sid}', [\App\Http\Controllers\Student_Controller::class, 'fetch_one'])->name('students.fetch_one');
Route::post('/api/students/create_one/', [\App\Http\Controllers\Student_Controller::class, 'create_one'])->name('students.create_one');
Route::put('/api/students/update_one/{student_sid}', [\App\Http\Controllers\Student_Controller::class, 'update_one'])->name('students.update_one');
Route::delete('/api/students/remove_one/{student_sid}', [\App\Http\Controllers\Student_Controller::class, 'remove_one'])->name('students.remove_one');

require __DIR__.'/auth.php';
