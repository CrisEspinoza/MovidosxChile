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
    return view('/welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/action/{id}','actionController@menu')->name('menu');


Route::get('/volunteering/{id}','volunteeringController@create')->name('createVol');
Route::get('/event/{id}','eventController@create')->name('createEvent');
Route::get('/collection_center/{id}','collectionCenterController@create')->name('createCollCenter');
Route::get('/donation/{id}','donationController@create')->name('createDonation');

Route::get('/actions/{id}','actionController@index')->name('indexAction');


Route::resource('action', 'actionController');
Route::resource('asset', 'assetController');
Route::resource('bank', 'bankController');
Route::resource('catastrophe', 'catastropheController');
Route::resource('collectionCenter', 'collectionCenterController');
Route::resource('donation', 'donationController');
Route::resource('event', 'eventController');
Route::resource('organization', 'organizationController');
Route::resource('user', 'userController');
Route::resource('voluntary', 'voluntaryController');
Route::resource('volunteering', 'volunteeringController');