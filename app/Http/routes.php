<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::pattern('id', '[\d]+');

Route::get('user/{id?}', ['middleware' => 'auth', 'uses' => 'UserController@index', 'as' => 'user']);

Route::resource('user', 'UserController',
                ['names' => ['create' => 'user.build']]);

Route::get('foo', function() {
	// $url = action('UserController@index');
	// $url = route('user.build');
	// return $url;
	return response()->caps('foo1');
	$content = ['hello', 11];
	$status = 200;
	$value = 'application/json';
	$pathToFile = public_path().'/images/about-icon-1.png';
	return response()->download($pathToFile);
	return response($content, $status)
			->header('Content-Type', $value)
			->withCookie('name', 'value-value');;
});

Route::any('stripe/{age}', ['middleware' => 'old:200', function($age) {
	return $age;
}]);

Route::any('posts/{post}/comments/{comment}', function($postId, $commentId) {
	// $url = url('/');
	$rs = $postId.'/'.$commentId;
	return $rs;
});

Route::get('/', ['middleware' => 'auth', function () {
    return view('welcome');
}]);

Route::get('/home', ['middleware' => 'auth', function () {
    return view('welcome');
}]);

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');