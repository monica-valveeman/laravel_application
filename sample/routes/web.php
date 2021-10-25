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




 
Route::post('/product','ProductController@store');



Route::get('/validate','ProductController@store');

Route::get('/middle1','ProductController@samp')->middleware('samp:middleware demo');

Route::resource('student','studentcontroller');
Route::get('/show','studentcontroller@index');
//Route::get('/student','studentcontroller@store')->middleware('validate');


Route::get('/facadeex', function() {
    return TestFacades::testingFacades();
 });

 Route::group(['middleware'=>['Groups']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/product','ProductController@index');    
     
 });


Route::resource('Persons','PersonController');
Route::get('/retrieve','PersonController@index');

Route::resource('Querysamp','queryController');
Route::get('/email_validate','queryController@email_validate');

Route::resource('course','Coursecontroller');

Route::resource('country','Countrycontroller');