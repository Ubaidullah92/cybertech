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
Route::get('/', 'HomeController@index')->name('home');
Route::post('/apply', 'HomeController@store')->name('store');

Auth::routes();
Route::get('/applicant/view','ApplicantsController@getApplicant')->name('applicant.view');
Route::get('/applicant/share/{applicant}','ApplicantsController@getShareForm')->name('applicant.share');
Route::resource('applicant', 'ApplicantsController');
Route::get('/position/view','PositionController@getPositions')->name('position.view');
Route::resource('position','PositionController');
