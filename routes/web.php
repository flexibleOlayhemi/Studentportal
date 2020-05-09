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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'studentController@index');
Route::post('/students', 'studentController@selectCourse');
Route::get('/students/{student}', 'studentController@show');
Route::post('/students/{student}', 'studentController@selectCourse');
Route::options('/students/{student}', 'studentController@checkResults');
Route::delete('/students/{student}', 'studentController@removeCourse');

Route::get('/courses', 'courseController@index');
Route::get('/courses/{course}', 'courseController@show');
Route::get('/courses/{course}/{student}', 'courseController@score');
Route::patch('/courses/{course}/{student}', 'courseController@upload');

Route::get('/admin', 'adminController@index');
Route::delete('/admin', 'adminController@destroy');
Route::get('/admin/add-student', 'adminController@createStudent');
Route::get('/admin/add-course', 'adminController@createCourse');
Route::post('/admin', 'adminController@storeStudent');
Route::put('/admin', 'adminController@storeCourse');
Route::get('/admin/add-lecturer', 'adminController@createLecturer');

