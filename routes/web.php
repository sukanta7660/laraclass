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

		Route::group(['prefix' => 'admin'],function(){
			Route::get('dashboard','IndexController@admin');
			Route::get('category','IndexController@category');
			Route::get('create-category','IndexController@create_category_page');
			Route::post('save-category','IndexController@save');
			Route::get('delete-category/{id}','IndexController@delete');
			Route::get('update-category/{id}','IndexController@update_page');
            Route::post('update-category','IndexController@update');
		});







