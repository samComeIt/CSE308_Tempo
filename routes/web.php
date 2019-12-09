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

Route::resource('/approval', 'FacilityController')->middleware('auth');
Route::resource('/open', 'OpenFacilityController')->middleware('auth');

Route::resource('/timeslot', 'TimeslotController')->middleware('auth');
Route::post('/open/timeslot', 'TimeslotController@openStore')->name('openTimeslot')->middleware('auth');
Route::post('/approval/timeslot', 'TimeslotController@approvalStore')->name('approvalTimeslot')->middleware('auth');


Route::get('/mypage', 'ReservationController@mypageReservation')->name('mypageReservation');
Route::get('/mypage/current', 'ReservationController@mypageCurrent')->name('mypage.current');
Route::get('/mypage/current/{id}', 'ReservationController@mypageCurrentCancel')->name('mypage.cancel');


Route::get('/mypage/past', 'ReservationController@mypagePast')->name('mypagePast');


Route::resource('/mypage/penalty', 'PenaltyController');


Route::get('/message', 'ReservationController@message')->name('message.index');
Route::get('/messageSelectUpdate/{id}', 'TimeslotController@messageSelectUpdate')->name('messageSelectUpdate');

//Route::resource('/mypage', 'TimeslotController')->middleware('auth');
Route::post('/approval/reservation', 'ReservationController@approvalstore')->name('approvalstore')->middleware('auth');
Route::post('/open/reservation', 'ReservationController@openstore')->name('approvalstore')->middleware('auth');
