<?php

    Route::group(['middleware'=>['web']],function(){
	Route::get('blog/{slug}' , ['as' => 'blog.single' , 'user'=> 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog' ,['uses' => 'BlogController@getIndex', 'as'=>'blog.index']);
	Route::get('contact','PagesController@getContact');
	Route::get('about','PagesController@getAbout');
	Route::get('/','PagesController@getIndex');
	Route::resource('post','PostController');
 

	Route::get('auth/login', 'AuthController@getloginForm')->name('auth.login');
	Route::post('auth/login', 'AuthController@postlogin');

	Route::get('/logout', 'AuthController@getlogout');

	// register form

	Route::get('auth/register', 'AuthController@getregisterForm');
	Route::post('/register', 'AuthController@postregisterForm')->name('register.post');
	// testing route

	//Route::get('/test', 'PostController@testMethod')
	//		->name('test.get');

	//Route::get('/test', [
	//	'as' => 'test.get',
	//	'uses' => 'PostController@testMethod'
	//]);
});