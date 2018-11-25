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
    return view('home');
});

//
// Route::prefix('volunteer')->group(function () {
//     //Route::resource('options', 'ProyectosController');
//
//
// });

Route::resources([
	'activities' => 'ActivitiesController',
	'communities' => 'CommunitiesController',
	'volunteers' => 'VolunteersController'
]);

Route::get('activities/{id}/destroy', [
			'uses' => 'ActivitiesController@destroy',
			'as'   => 'activities.destroy'

]);

Route::get('communities/{id}/destroy', [
			'uses' => 'CommunitiesController@destroy',
			'as'   => 'communities.destroy'

]);

Route::get('volunteers/{id}/destroy', [
			'uses' => 'VolunteersController@destroy',
			'as'   => 'volunteers.destroy'

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
