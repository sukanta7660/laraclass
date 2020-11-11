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
	
	

		Route::get('about','IndexController@about');
		Route::get('contact','IndexController@contact')->name('contact');
		Route::get('blog','IndexController@blog');

		Route::group(['middleware' => 'auth'],function(){

			Route::group(['prefix' => 'admin'],function(){
			Route::get('dashboard','Admin\DashboardController@index')->middleware('admin');


			/*------------------ Blog ------------------*/
			Route::get('all-blog','Admin\BlogController@index');
			Route::get('create-blog','Admin\BlogController@create');
			Route::post('save-blog','Admin\BlogController@save');
			Route::get('update-blog/{id}','Admin\BlogController@update_page');
			Route::post('update-blog','Admin\BlogController@update');
			Route::get('delete-blog/{id}','Admin\BlogController@delete');
			/*------------------ Blog ------------------*/

			/*------------------ Category ---------------*/
			Route::get('all-category','Admin\CategoryController@index');
			Route::get('create-category','Admin\CategoryController@create_category_page');
			Route::post('save-category','Admin\CategoryController@save');
			Route::get('delete-category/{id}','Admin\CategoryController@delete');
			Route::get('update-category/{id}','Admin\CategoryController@update_page');
			Route::post('update-category','Admin\CategoryController@update');
			/*------------------ Category ---------------*/

			Route::get('category-wise-post','Admin\CategoryController@category');
		});	
		});
		
		







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
