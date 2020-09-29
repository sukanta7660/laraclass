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

		Route::get('/','IndexController@index');
	
	// Route::group(['middleware' => 'age'],function(){
		
	// });

		Route::get('about','IndexController@about');
		Route::get('contact','IndexController@contact')->name('contact');
		Route::get('blog','IndexController@blog');

		Route::get('admin-dashboard','IndexController@admin');
		Route::get('admin-example','IndexController@example');






