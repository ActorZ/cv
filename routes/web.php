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


Route::get('/', function () {
    return view('index');
});*/


//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'ContactController@store')->name('contact.store');
//eng
Route::get('/en', 'HomeController@index_en')->name('home.en');
Route::post('/en', 'ContactController@store')->name('contact.store');

Route::prefix('adm')->group(function(){
	//login routes
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	//password reset routes
	Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
	//admin pages
	Route::resource('/static','StaticPageController');

	Route::get('/settings/{id}','AdminSettingsController@edit')->name('settings.edit');
	Route::put('/settings/{id}','AdminSettingsController@update')->name('settings.update');

	Route::resource('/projects','ProjectController');

	Route::get('/contact','AdmAdminContactController@index')->name('contact.index');
	Route::delete('/contact/{poruka}','AdmAdminContactController@destroy')->name('contact.destroy');
	Route::get('/contact/trash','AdmAdminContactController@trash')->name('contact.trash');

	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

