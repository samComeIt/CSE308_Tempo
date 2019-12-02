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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//Route::resource('/approval/facility', 'FacilityController');
//Route::resource('/open/facility', 'OpenFacilityController');

//Route::get('/approval', 'FacilityController@approval')->name('approval');
//Route::get('/open', 'FacilityController@open')->name('open');
Route::resource('/approval', 'FacilityController')->middleware('auth');
Route::resource('/open', 'OpenFacilityController')->middleware('auth');

Route::resource('/timeslot', 'TimeslotController')->middleware('auth');
Route::post('/open/timeslot', 'TimeslotController@openStore')->name('openTimeslot')->middleware('auth');
Route::post('/approval/timeslot', 'TimeslotController@approvalStore')->name('approvalTimeslot')->middleware('auth');


Route::get('/mypage', 'ReservationController@mypageReservation')->name('mypageReservation');
Route::get('/mypage/penalty', 'PenaltyController@index')->name('index');
//Route::resource('/mypage', 'TimeslotController')->middleware('auth');
Route::resource('/approval/reservation', 'ReservationController')->middleware('auth');


