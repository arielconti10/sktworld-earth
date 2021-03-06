<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//

Route::group(['middleware' => ['auth:api', 'cors']], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //Spot List
    Route::get('/spots', 'SpotController@index');
    Route::get('/spots/{spot}', 'SpotController@show');

    //Checkin
    Route::post('/checkin', 'CheckinController@create');


    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
});

Route::group(['middleware' => ['guest:api', 'cors']], function () {
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
    Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});