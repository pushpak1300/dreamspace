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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin Routes
Route::get('/staff/create','AdminController@createstaff')->name('createstaff');
Route::post('/staff/create', 'AdminController@storestaff')->name('storestaff');
Route::get('/staff', 'AdminController@viewstaff')->name('viewstaff');
Route::get('/admin/staff', 'AdminController@fetchAllStaff')->name('viewstaff');