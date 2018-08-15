<?php

Route::get('/test', function(){

	//DB::statement("CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password'");

});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function(){

	Route::get('/register', 'RegisterController@index')->name('register');

	Route::get('/login', 'LoginController@index')->name('login');

	Route::get('/forget/password', 'PasswordResetController@index')->name('password.reset');
});

Route::group(['prefix' => 'app', 'namespace' => 'Project', 'as' => 'app.'], function(){

	Route::get('/new', 'ProjectController@new')->name('new');
	Route::post('/new', 'ProjectController@store');

	Route::get('/lists', 'ProjectController@lists')->name('lists');

	Route::group(['prefix' => 'manage', 'as' => 'manage.'], function(){

		Route::get('domain', 'DomainController@index')->name('domain');

		Route::get('setting', 'SettingController@index')->name('setting');

		Route::get('backup', 'BackupController@index')->name('backup');

		Route::get('upgrade', 'SettingController@upgrade')->name('upgrade');
		
		Route::group(['prefix' => 'ssh'], function(){

			Route::get('/', 'DeployController@index')->name('deploy');

			Route::get('/generate', 'DeployController@generate')->name('generate');

			Route::get('/view', 'DeployController@view')->name('ssh.view');
		});
		Route::group(['prefix' => 'ssl', 'as' => 'ssl.'], function(){

			Route::get('/', 'CertificateController@index')->name('index');

			Route::get('/create', 'CertificateController@create')->name('create');

		});

		Route::get('/id/detail', 'ProjectController@detail')->name('detail');
	});

});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Account', 'as' => 'dashboard.'], function(){

	Route::get('/', 'DashboardController@index')->name('index');

	Route::get('/billing', 'PaymentController@index')->name('billing');

	Route::get('/password', 'PasswordController@index')->name('password');
	
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

