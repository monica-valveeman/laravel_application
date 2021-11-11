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

Route::resource('user','usercontroller');
Route::get('/email_validate','usercontroller@email_validate');
Route::get('/login','usercontroller@login');
Route::post('/post_login','usercontroller@post_login');
Route::get('/dashboard','usercontroller@dashboard');
Route::get('/logout','usercontroller@logout');
Route::get('/user/create','usercontroller@retrievestate');
Route::get('/user/create/{id}','usercontroller@cityrequest');

Route::get('/userdetails/create','userdetailcontroller@create');
Route::post('/userdetails','userdetailcontroller@store')->name('userdetails.store');

Route::get('/userdetails/create/{id}','userdetailcontroller@cityrequest');

Route::get('/education/create','educationcontroller@create');
Route::post('/education','educationcontroller@store');


