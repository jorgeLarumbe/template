<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::name('profile_path')->get('avatar-profile', 'UserController@profile');
	Route::name('profile_path')->post('avatar-profile', 'UserController@update_avatar');
	Route::name('table')->get('table', 'HomeController@table');
	Route::name('chart')->get('chart', 'HomeController@chart');

});

Route::get('/home', 'HomeController@index')->name('home');