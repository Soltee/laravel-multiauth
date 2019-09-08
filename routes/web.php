<?php


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

//Admin
Route::get('/admin/register', 'Admin\RegisterController@showRegisterationForm')->name('admin.register.view');
Route::post('/admin/register', 'Admin\RegisterController@register')->name('admin.register');

Route::get('/admin/verify', 'Admin\VerificationController@show')->name('admin.verify');

Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');

Route::get('/admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendAdminResetLinkEmail')->name('admin.password.email.send');

Route::get('/admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');


//Admin EMaail veify
Route::get('/admin/email/verify', 'Admin\VerificationController@show')->name('admin.verification.notice');
Route::get('/admin/email/verify/{id}', 'Admin\VerificationController@verify')->name('admin.verification.verify');
Route::get('/admin/email/resend', 'Admin\VerificationController@resend')->name('admin.verification.resend');

Route::get('/home', 'HomeController@index')->name('home');



//Users
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
Route::get('/user/{user}', 'UsersController@show')->name('user.show')->middleware('auth:admin');
Route::post('/user/{user}/update', 'UsersController@update')->name('profile.update')->middleware('auth');
Route::post('/user/{user}/delete', 'UsersController@destroy')->name('user.profile.delete')->middleware('auth:admin');

//Admin
Route::get('/admin/home', 'AdminController@index')->name('admin.home')->middleware('verified');
Route::get('/admin/profile', 'AdminController@show')->name('admin.profile');
Route::post('/admin/{admin}/update', 'AdminController@update')->name('admin.profile.update');

Route::get('/search', 'UsersController@search')->name('user.search')->middleware('auth:admin');
Route::get('/user/{user}', 'UsersController@show')->name('user.show')->middleware('auth:admin');

