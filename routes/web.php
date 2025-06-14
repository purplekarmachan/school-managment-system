<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/subjects',SubjectController::class);
Route::resource('/addresses',AddressController::class);
Route::resource('/students',StudentController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/teachers',TeacherController::class);
// Route::resource('/student-subjects',StudentSubjectController::class);
