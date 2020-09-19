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
	Route::get('contact','IndexController@contact');

	 Route::get('/calc',function(){
	 	$a = 100;
	 	$b = 4;
	 	$c = $a*$b;
	 	return $c;
	 });

	 Route::get('/exam',function(){
	 	return "This is practice page";
	 });
	Route::get('calc',function(){
	 	$a = 100;
	 	$b = 4;
	 	$c = $a*$b;
	 	return $c;
	});

	 Route::get('exam1',function(){
	 	//$names = array("www","xxx","yyy","zzz","aaa");
	 	$names = "Examp";
	 	return view('ab')->with(['names'=>$names]);
	 });

	 Route::get('user/home',function(){
	 	return view('user.home');
	 });
	 Route::get('admin/home',function(){
	 	return view('admin.adminhome');
	 });

// Route::group(['middleware' => ['age']],function(){

// });
 // Route::prefix('user')->group(function(){

 // });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

