<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
// use App\Http\Controllers\MyController;
// use App\Http\Controllers\Ice_cream_shopController;
// use App\Http\Controllers\PriceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    return view('courses.welcome');
});


Route::get('/about_us', function () {
    return view('about_us');
});

Route::resource('courses', CourseController::class);

Route::resource('teachers', TeacherController::class);

Route::resource('students', StudentController::class);
