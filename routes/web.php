<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'get_all_student'])->name('student.index');
Route::get('/edit/{id}', [StudentController::class, 'get_student_by_id'])->name('student.update');
Route::put('/edit/{id}', [StudentController::class, 'edit'])->name('student.store');
