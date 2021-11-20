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

// Unused
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'userController@index')->name('home');
Route::get('/home', 'userController@index')->name('home');
Route::resource('/user', 'userController');

Route::get('/contact-form', 'CaptchaServiceController@index');
Route::post('/captcha-validation', 'CaptchaServiceController@capthcaFormValidate');
Route::get('/reload-captcha', 'CaptchaServiceController@reloadCaptcha')->name('reload_captcha');