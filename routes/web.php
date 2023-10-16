<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/admin', 'staff.admin');
Route::post('/admin/login', [UsersController::class, 'adminLogin']);
