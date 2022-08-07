<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function (){

    Route::middleware(['guest:admin'])->group(function(){
        Route::get('/login', 'AdminController@login')->name('login');
        Route::post('/check', 'AdminController@check')->name('check');

    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home', 'admin.home')->name('adminHome'); 
    });

});


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/parent', 'ParentController@index')->name('parent');

Route::get('/add/addParent', function() {
    return view('addParent');
});

Route::post('/add/addParent', 'ParentController@store')->name('addParent');

Route::get('/student', 'StudentController@index')->name('student');

Route::get('/add/addStudent', 'StudentController@list')->name('addStudent');

Route::post('/add/addStudent', 'StudentController@store')->name('addStudent');

Route::get('/teachers', 'StaffController@index');


Route::get('/addStaff', function () {
    return view('addStaff');
});

Route::post('/addStaff', 'StaffController@store')->name('addStaff');

Route::get('/subjects', 'SubjectController@index')->name('subjects');

Route::get('/add/addSubjects', function () {
    return view('addSubjects');
});

Route::post('/add/addSubjects', 'SubjectController@store')->name('addSubjects');

Route::get('/editSubject/{$subject->id}/edit', 'SubjectController@edit')->name('editSubject');

Route::post('/editSubject/{$subject->id}', 'SubjectController@update')->name('editSubject');

Route::get('/classes', 'ClassController@index')->name('classes');

Route::get('/class/add', function () {
    return view('addClass');
});

Route::post('/add/addClass', 'ClassController@store')->name('addClass');