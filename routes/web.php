<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// student routes
Route::view('/', 'student.home');
Route::view('/compose', 'student.compose');
Route::view('/track', 'student.complaint');
Route::view('/about', 'index');

// staff routes
Route::view('/admin', 'staff\admin');
Route::post('/admin', [UserController::class, 'adminLogin']);

//side menu
Route::view('/dashboard ', 'staff\admin');
Route::view('/add-staff ', 'staff\addStaff');
Route::view('/view-staff ', 'staff\viewStaff');

Route::view('/add-student ', 'staff\addStudent');
Route::view('/view-student ', 'staff\viewStudent');

Route::view('/add-section ', 'staff\addSection');
Route::view('/view-section ', 'staff\viewSection');

Route::view('/add-task ', 'staff\addTask');
Route::view('/view-task ', 'staff\viewTask');

Route::view('/add-role ', 'staff\addRole');
Route::view('/view-role ', 'staff\viewRole');

Route::view('/add-class ', 'staff\addClass');
Route::view('/view-class ', 'staff\viewClass');

Route::view('/add-module ', 'staff\addModule');
Route::view('/view-module ', 'staff\viewModule');

Route::view('/issues', 'staff\issues');

Route::view('/notification ', 'staff\notification');

Route::view('/profile ', 'staff\profile');

Route::view('/view-staff-profile', 'staff\viewProfile');

Route::view('/view-student-profile', 'staff\viewProfile');

Route::get('/logout ', [UserController::class, 'logout']);




