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
Route::get('/students', 'studentController@index')->name('student.index');
Route::post('/students', 'studentController@selectCourse')->name('student.select');
Route::get('/students/{student}', 'studentController@show')->name('student.show');
Route::post('/students/{student}', 'studentController@selectCourse')->name('student.selcourse');
Route::options('/students/{student}', 'studentController@checkResults')->name('student.result');
Route::delete('/students/{student}', 'studentController@removeCourse')->name('student.remcourse');


Route::get('/courses', 'courseController@index')->name('courses.index');
Route::get('/courses/{course}', 'courseController@show')->name('courses.show');
Route::get('/courses/{course}/{student}', 'courseController@score')->name('courses.score');
Route::patch('/courses/{course}/{student}', 'courseController@upload')->name('courses.upload');

Route::get('/admin', 'adminController@index')->name('admin.index');
Route::delete('/admin', 'adminController@destroy')->name('admin.destroy');
Route::get('/admin/add-student', 'adminController@createStudent')->name('admin.addstudent');
Route::get('/admin/add-course', 'adminController@createCourse')->name('admin.addcourse');
Route::post('/admin', 'adminController@storeStudent')->name('admin.storestudent');
Route::put('/admin', 'adminController@storeCourse')->name('admin.storecourse');
Route::get('/admin/add-lecturer', 'adminController@createLecturer')->name('admin.createlecturer');

