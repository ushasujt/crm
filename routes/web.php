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

Route::get('/', 'Auth\LoginController@login')->middleware('revalidate');
Route::post('/login-submit', 'Auth\LoginController@authenticate');
Route::any('/logout', 'Auth\LoginController@logout');
Route::get('/access-denied', 'Auth\LoginController@accessDenied');
Route::any('forgot-password', 'Auth\ForgotPasswordController@forgotPassword');
Route::post('forgot-password/send-verification-code', 'Auth\ForgotPasswordController@sendVerificationMail');
Route::any('verify-email', 'Auth\ForgotPasswordController@verifyEmail');
Route::post('set-new-password', 'Auth\ForgotPasswordController@setNewPassword');


Route::group(['middleware' => ['custom.auth']], function () {
     Route::get('/home/', 'Auth\LoginController@homePage');
});