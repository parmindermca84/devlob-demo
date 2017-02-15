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

Route::get('/', ['uses' => 'PagesController@index']);

Route::get('blade', ['uses' => 'PagesController@blade']);


/*Route::get('/', function () {
	//return realpath(base_path('resources/views'));
    return view('welcome');
});*/


Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
/*Route::get('users', function() {
	$users = [
			'0' => [
			'first_name' => 'Parminder',
			'last_name' => 'Singh',
			'location' => 'Gurgaon'
			],
			'1' => [
			'first_name' => 'Inderjeet',
			'last_name' => 'Kaur',
			'location' => 'Bhopal'
			]
	];
	return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'authenticated'], function() {
	Route::get('users', 'UsersController@index');

	Route::get('profile', ['uses' => 'PagesController@profile']);

	Route::get('settings', ['uses' => 'PagesController@settings']);

});
