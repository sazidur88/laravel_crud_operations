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
    return view('welcome');
});

Route::get('/register', 'StudentController@create');

Route::get('/students', 'StudentController@index');

Route::post('/store', 'StudentController@store');

Route::get('/student-single/{id}','StudentController@show');


// Route::get('/teacher/teacher-register', 'TeacherController@create');
Route::get('/teacher/new', 'Teacher\TeacherController@create');

Route::post('/teacher/store', 'Teacher\TeacherController@store');

Route::get('/teachers', 'Teacher\TeacherController@index');