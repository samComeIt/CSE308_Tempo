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
    return view('auth/login');
});

Auth::routes(); 


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/facility', 'FacilityController');
Route::resource('/facility', 'OpenFacilityController');

//Route::get('/approval', 'FacilityController@approval')->name('approval');
//Route::get('/open', 'FacilityController@open')->name('open');
Route::resource('/approval', 'FacilityController');
Route::resource('/open', 'OpenFacilityController');