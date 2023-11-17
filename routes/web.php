<?php

use App\Models\Dit;
use App\Models\Classes;
use App\Models\Modules;
use App\Models\DitStudents;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;

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
Route::post('/submit-complaint', [IssueController::class , 'createComplaint']);

// staff routes
// Route::view('/admin', '');
Route::get('/admin' , function(){
    $totalStudents = DitStudents::count();
    $totalStaffs = Dit::count();
    $totalClasses = Classes::count();
    $totalModules = Modules::count();

   return view('staff\admin',[
        'totalStudents' => $totalStudents,
        'totalModules' => $totalModules,
        'totalClasses' => $totalClasses,
        'totalStaffs' => $totalStaffs
]);
});  

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

