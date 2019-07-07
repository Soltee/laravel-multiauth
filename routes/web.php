<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::get('admin/register', 'Admin\RegisterController@showRegisterationForm')->name('admin.register.view');
Route::post('admin/register', 'Admin\RegisterController@register')->name('admin.register');

Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin-password/reset', 'Admin\ResetPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.email');
Route::get('/admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/home', 'AdminController@index')->name('admin.home');

