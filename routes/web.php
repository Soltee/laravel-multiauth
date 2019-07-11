<?php


Route::get('/', 'WelcomeController@index')->name('welcome');

//Test
Route::get('test/register', 'TestController@showRegisterationForm')->name('test.register.view');
Route::post('test/register', 'TestController@register')->name('test.register');
Route::get('test/verify/{email}', 'TestController@showVerify')->name('test.register.verify');
Route::get('test/{email}/{token}', 'TestController@getVerify')->name('test.verification.resent');
Route::post('test/{email}/{token}', 'TestController@resendVerify')->name('test.verification.resent');



//Admin
Route::get('admin/register', 'Admin\RegisterController@showRegisterationForm')->name('admin.register.view');
Route::post('admin/register', 'Admin\RegisterController@register')->name('admin.register');

Route::get('admin/verify', 'Admin\VerificationController@show')->name('admin.verify');

Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');

Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendAdminResetLinkEmail')->name('admin.password.email.send');

Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');


Auth::routes(['verify' => true]);

//Admin EMaail veify
Route::get('admin/email/verify', 'Admin\VerificationController@show')->name('admin.verification.notice');
Route::get('admin/email/verify/{id}', 'Admin\VerificationController@verify')->name('admin.verification.verify');
Route::get('admin/email/resend', 'Admin\VerificationController@resend')->name('admin.verification.resend');

Route::get('home', 'HomeController@index')->name('home');
Route::get('test/home', 'TestController@home')->name('test.home');


Route::get('admin/home', 'AdminController@index')->name('admin.home')->middleware('verified');;
Route::get('editor/home', 'EditorController@index')->name('editor.home')->middleware('verified');

