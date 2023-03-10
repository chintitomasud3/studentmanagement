<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});




// Route::get('/student', [StudentController::class, 'index'])->name('student.index');
// Route::get('/adddata', [StudentController::class, 'addData'])->name('student.adddata');
// Route::post('/store-data', [StudentController::class, 'storeData']);
// Route::get('/edit-data/{id}', [StudentController::class, 'editData']);
// Route::post('/update-data/{id}', [StudentController::class, 'updateData']);
// Route::get('/delete-data/{id}',[StudentController::class,'deleteData']);


// Route::get('/enrollment', [EnrollmentController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // User needs to be authenticated to enter here.
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/adddata', [StudentController::class, 'addData'])->name('student.adddata');
    Route::post('/store-data', [StudentController::class, 'storeData']);
    Route::get('/edit-data/{id}', [StudentController::class, 'editData']);
    Route::post('/update-data/{id}', [StudentController::class, 'updateData']);
    Route::get('/delete-data/{id}', [StudentController::class, 'deleteData']);


    Route::get('/enrollment', [EnrollmentController::class, 'index'
    ]);

 

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  // course

   Route::get('/course',[CourseController::class,'index']);
   Route::get('/coursecreate',[CourseController::class,'create'])->name('course.create');
   Route::post('/coursestore',[CourseController::class,'store'])->name('course.store');
   Route::get('/coursedit/{course}',[CourseController::class,'edit'])->name('course.edit');
   Route::post('/courseupdate/{id}', [CourseController::class, 'update']);
   Route::get('/coursedestroy/{id}', [CourseController::class, 'destroy']);



   // Teacher

   Route::get('/teacher',[TeacherController::class,'index']);
   Route::get('/teachercreate',[TeacherController::class,'create'])->name('teacher.create');
   Route::post('/teacherstore',[TeacherController::class,'store'])->name('teacher.store');
   Route::get('/teacheredit/{course}',[TeacherController::class,'edit'])->name('teacher.edit');
   Route::post('/teacherupdate/{id}', [TeacherController::class, 'update']);
   Route::get('/teacherdestroy/{id}', [TeacherController::class, 'destroy']);

});