<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'app', 'namespace' => 'Project', 'as' => 'app.'], function(){

	Route::get('/new', 'ProjectController@new')->name('new');

	Route::get('/lists', 'ProjectController@lists')->name('lists');

	Route::group(['prefix' => 'manage', 'as' => 'manage.'], function(){

		Route::get('/domain', 'DomainController@index')->name('domain');

	});

});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Account', 'as' => 'dashboard.'], function(){

	Route::get('/', 'DashboardController@index')->name('index');

	Route::get('/billing', 'PaymentController@index')->name('billing');
	
});


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

