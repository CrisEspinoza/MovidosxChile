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

Route::get('/actions/{id}','actionController@index')->name('indexAction');

Route::get('/deleteVolunteering/{id}','volunteeringController@destroy')->name('deleteVolunteering');
Route::get('/deleteCollectionCenter/{id}','collectionCenterController@destroy')->name('deleteCollection');
Route::get('/deleteDonation/{id}','donationController@destroy')->name('deleteDonation');
Route::get('/deleteEvent/{id}','eventController@destroy')->name('deleteEvent');



Route::get('/volunteering/{id}','volunteeringController@create')->name('createVol');
Route::get('/event/{id}','eventController@create')->name('createEvent');
Route::get('/collection_center/{id}','collectionCenterController@create')->name('createCollCenter');
Route::get('/donation/{id}','donationController@create')->name('createDonation');


Route::resource('donation', 'donationController');
Route::resource('collectionCenter', 'collectionCenterController');
Route::resource('volunteering', 'volunteeringController');
Route::resource('action', 'actionController');
Route::resource('asset', 'assetController');
Route::resource('bank', 'bankController');
Route::resource('catastrophe', 'catastropheController');
Route::resource('event', 'eventController');
Route::resource('organization', 'organizationController');
Route::resource('user', 'userController');
Route::resource('voluntary', 'voluntaryController');
Route::resource('rnv', 'rnvController');