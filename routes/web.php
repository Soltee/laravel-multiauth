<?php


Auth::routes();
Route::get('/', 'WelcomeController@index');

//Admin
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');

Route::get('/admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendAdminResetLinkEmail')->name('admin.password.email.send');

Route::get('/admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');

Route::group(['prefix' => 'admin'], function(){

	/* Admin Login && Resets*/
	Route::get('/register', 'Admin\RegisterController@showRegisterationForm')->name('admin.register.view');
	Route::post('/register', 'Admin\RegisterController@register')->name('admin.register');

	Route::get('/verify', 'Admin\VerificationController@show')->name('admin.verify');


	//Admin EMaail veify
	Route::get('/email/verify', 'Admin\VerificationController@show')->name('admin.verification.notice');
	Route::get('/email/verify/{id}', 'Admin\VerificationController@verify')->name('admin.verification.verify');
	Route::get('/email/resend', 'Admin\VerificationController@resend')->name('admin.verification.resend');


	Route::get('/home', 'AdminController@index')->name('admin.home')->middleware('verified');
	Route::get('/profile', 'AdminController@show')->name('admin.profile');
	Route::post('/{admin}/update', 'AdminController@update')->name('admin.profile.update');

	//Admin User Search
	Route::get('/search', 'UsersController@search')->name('user.search')->middleware('auth:admin');

	//Show Users
	Route::get('/user/{user}', 'UsersController@show')->name('user.show')->middleware('auth:admin');
	Route::post('/user/{user}/update', 'UsersController@update')->name('profile.update')->middleware('auth');
	Route::post('/user/{user}/delete', 'UsersController@destroy')->name('user.profile.delete')->middleware('auth:admin');
});



Route::get('/home', 'HomeController@index')->name('home');

//Users
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');