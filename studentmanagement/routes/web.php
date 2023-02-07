<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


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
    return view('welcome');
});


Route::get('/masud', function () {
    return view('masud');
});


Route::get('/student', [StudentController::class, 'index']);
Route::get('/adddata', [StudentController::class, 'addData']);
Route::post('/store-data', [StudentController::class, 'storeData']);


route::get("/practice",[StudentController::class,"index"]);