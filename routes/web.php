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

Route::group(['middleware'=>['role:Staff','auth'],'prefix'=>'backside','as'=> 'backside.'],function ()
{	
	Route::resource('/academic','AcademicController');
	Route::resource('/classroom','ClassroomController');
	Route::resource('/teacher','TeacherController');
	Route::resource('/grade','GradeController');
	Route::resource('/subject','SubjectController');
	Route::resource('/student','StudentController');
	Route::resource('/timetable','TimetableController');
	Route::resource('/record','RecordController');
	Route::resource('/attendance','AttendanceController');
});

Route::group(['middleware'=>['role:Teacher|Staff','auth'],'prefix'=>'backside','as'=> 'backside.'],function ()
{		
	Route::resource('/attendance','AttendanceController');

});

Route::post('search','SearchController@store')->name('search');
Route::post('searchbyattendance','SearchAttendanceController@store')->name('searchattendance');
Route::post('searchbyrecord','SearchRecordController@store')->name('searchrecord');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

