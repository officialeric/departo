<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
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
Route::get('/view-staff', [UserController::class, 'ditStaffs']);

Route::view('/add-student ', 'staff\addStudent');
Route::get('/view-student ', [UserController::class, 'ditStudents']);

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

Route::get('/notification-{type} ', [NotificationController::class, 'messages']);

Route::view('/info ', 'staff\message');

Route::view('/profile ', 'staff\profile');

Route::get('/view-profile-{role}/{id}', [ProfileController::class, 'showProfile']);

Route::view('/view-detail-section', 'staff\viewDetails');

Route::view('/view-detail-task', 'staff\viewDetails');

Route::view('/view-detail-role', 'staff\viewDetails');

Route::view('/view-detail-class', 'staff\viewDetails');

Route::view('/view-detail-module', 'staff\viewDetails');

Route::get('/logout ', [UserController::class, 'logout']);

