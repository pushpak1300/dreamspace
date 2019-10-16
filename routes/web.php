<?php

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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('fullyregistered');

Route::get('/fill-details', 'HomeController@filldetails');
Route::post('/student/fill-details', 'HomeController@storestudentdetails')->name('storestudentdetails');



//admin Routes
Route::get('/staff/create','AdminController@createstaff')->name('createstaff');
Route::post('/staff/create', 'AdminController@storestaff')->name('storestaff');
Route::get('/staff', 'AdminController@viewstaffs')->name('viewstaffs');
Route::get('/admin/staff', 'AdminController@fetchAllStaff')->name('viewstaffdatatable');


//admin&staff routes
Route::get('/student/create', 'AdminController@createstudent')->name('createstudent');
Route::post('/student/create', 'AdminController@storestudent')->name('storestudent');
Route::get('/student', 'AdminController@viewstudents')->name('viewstudents');
Route::get('/admin/student', 'AdminController@fetchAllstudent')->name('viewstudentdatatable');

Route::delete('/student/{id}','AdminController@deletestudent')->name('deletestudent');
Route::delete('/admin/student/{id}', 'AdminController@viewstudent')->name('viewstudent');

Route::get('/admin/all/project', 'AdminController@fetchallproject');
Route::get('/admin/project', 'AdminController@viewproject');

//staff Routes


//student Routes
Route::resource('project', 'ProjectController');
Route::get('/user/project','ProjectController@viewselfproject')->name('viewselfproject');



Route::get('/report', 'ReportController@report');


