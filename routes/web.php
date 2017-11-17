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
    return view('/others/welcome');
});

Auth::routes();

// others

Route::get('/others/home', 'controllerOthers\HomeController@index')->name('home');
Route::get('/others/colaboradores', 'controllerOthers\ColaboradoresController@index')->name('colaboradores');

//government
Route::get('/government/home', 'controllerGovernment\HomeController@index')->name('homeGovernment');
Route::get('/government/newCatastrophe', 'controllerGovernment\NewCatastropheController@index')->name('newCatastropheGov');



Route::get('/government/listCatastrophe', 'controllerGovernment\ListCatastropheController@index')->name('listCatastropheGov');
Route::get('/government/seedCatastrophe', 'controllerGovernment\SeedCatastropheController@index')->name('seedCatastropheGov');

Route::resource('newCatastrophe', 'controllerGovernment\NewCatastropheController');




//Organizations

Route::get('/organizations/home', 'controllerOrganizations\HomeController@index')->name('homeOrganizations');

//User

Route::get('/user/home', 'controllerUser\HomeController@index')->name('homeUser');
Route::get('/user/Mydata', 'controllerUser\MydataController@index')->name('Mydata');
Route::get('/user/listCatastrophe', 'controllerUser\ListCatastropheController@index')->name('listCatastropheUser');
Route::get('/user/actions', 'controllerUser\ActionsController@index')->name('actionsUser');
Route::get('/user/seeCatastrophe', 'controllerUser\SeeCatastropheController@index')->name('seeCatastropheUser');
