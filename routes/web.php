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
// 
Route::get('/others/home', 'HomeController@index')->name('home');
Route::get('/others/colaboradores', 'controllerOthers\ColaboradoresController@index')->name('colaboradores');

//government

Route::get('/government/home', 'controllerGovernment\HomeController@index')->name('homeGobernment');
