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

Route::get('/enviar_tweet', function()
{
    return Twitter::postTweet(['status' => 'Mi primer tweet desde Laravel', 'format' => 'json']);
});

// others

Route::get('/others/home', 'controllerOthers\HomeController@index')->name('home');
Route::get('/others/colaboradores', 'controllerOthers\ColaboradoresController@index')->name('colaboradores');


//government

Route::get('/government/home', 'controllerGovernment\HomeController@index')->name('homeGovernment');
Route::get('/government/newCatastrophe', 'controllerGovernment\NewCatastropheController@index')->name('newCatastropheGov');
Route::get('/government/listCatastrophe', 'controllerGovernment\ListCatastropheController@index')->name('listCatastropheGov');
Route::get('/government/newActions', 'controllerGovernment\NewActionsController@index')->name('newActionsGov');
Route::get('/government/seeActions', 'controllerGovernment\SeeActionsController@index')->name('seeActionsGov');
Route::get('/government/listUsers', 'controllerGovernment\ListUsersController@index')->name('listUsersGov');

Route::resource('newCatastrophe', 'controllerGovernment\NewCatastropheController');

//Organizations

Route::get('/organizations/home', 'controllerOrganizations\HomeController@index')->name('homeOrganizations');
Route::get('/organizations/listCatastrophe', 'controllerOrganizations\ListCatastropheController@index')->name('listCatastropheOrgan');
Route::get('/organizations/AddActions', 'controllerOrganizations\AddActionsController@index')->name('AddActionsOrgan');
Route::get('/organizations/SeeCatastrophe', 'controllerOrganizations\SeeCatastropheController@index')->name('SeeCatastropheOrgan');
Route::get('/organizations/doonarMonay', 'controllerOrganizations\DonnarMonayController@index')->name('DonnarMonayOrgan');
Route::get('/organizations/volunteering', 'controllerOrganizations\VolunteeringController@index')->name('VolunOrgan');
Route::get('/organizations/collectionCenter', 'controllerOrganizations\CollectionCenterController@index')->name('collectionCenterOrgan');
Route::get('/organizations/event', 'controllerOrganizations\EventController@index')->name('eventOrgan');
Route::get('/organizations/listMyEvent', 'controllerOrganizations\ListMyEventController@index')->name('listMyEventOrgan');
Route::get('/organizations/seeActions', 'controllerOrganizations\SeeActionsController@index')->name('seeActionsOrgan');
Route::get('/organizations/modifyActions', 'controllerOrganizations\ModifyActionsController@index')->name('modifyActionsOrgan');

Route::resource('volunteering', 'controllerOrganizations\VolunteeringController');

//User

Route::get('/user/home', 'controllerUser\HomeController@index')->name('homeUser');
Route::get('/user/Mydata', 'controllerUser\MydataController@index')->name('Mydata');
Route::get('/user/listCatastrophe', 'controllerUser\ListCatastropheController@index')->name('listCatastropheUser');
Route::get('/user/actions', 'controllerUser\ActionsController@index')->name('actionsUser');
Route::get('/user/seeCatastrophe', 'controllerUser\SeeCatastropheController@index')->name('seeCatastropheUser');
Route::get('/user/acceptActions', 'controllerUser\AcceptActionsController@index')->name('acceptActionsUser');
Route::get('/user/seeActions', 'controllerUser\SeeActionsController@index')->name('seeActionsUser');
